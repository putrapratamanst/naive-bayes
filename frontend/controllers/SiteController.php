<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
use Exception;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Responden;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup','home'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback']
            ],
        ];
    }

    public function successCallback($client){
        $attributes = $client->getUserAttributes();
        $safe_attributes = [
            'social_media' => '',
            'id' => '',
            'username' => '',
            'name' => '',
            'email' => '',
        ];

        if($client instanceof \yii\authclient\clients\Google){
            $safe_attributes = [
                'social_media' => 'google',
                'id' => $attributes['id'],
                'username' => $attributes['emails'][0]['value'],
                'name' => $attributes['displayName'],
                'username' => $attributes['emails'][0]['value'],
            ];
        }

        $checkUser = User::find()->where(['email' => $attributes['emails'][0]['value'] ])->one();
        if($checkUser){
            Yii::$app->user->login($checkUser);
        }

        return $safe_attributes;
    }
    public function actionHome()
    {
        $this->layout = 'main2';
        return $this->render('home');
    }

    public function actionHomeTraining()
    {
        $this->layout = 'main2';
        return $this->render('home-training');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('site/login');
        }
        $responden = Responden::find()->where(['nama' => Yii::$app->user->identity->username])->one();
        if (!$responden) {
            throw new \yii\web\NotFoundHttpException("You Cannot Access This Page!");
        }

        return $this->redirect(['/responden/view', 'id' => $responden->id]);

        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            $loginForm = $post['LoginForm'];

            $responden = Responden::find()->where(['nama' => $loginForm['username']])->andWhere(['is_sample' => NULL])->one();
            if(!$responden){
                    throw new \yii\web\NotFoundHttpException("You Cannot Access This Page!");
            }
            $model->login();
            return $this->redirect(['/responden/view', 'id' => $responden->id]);

            // return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    public function actionLoginSample()
    {
        $this->layout = 'main-sample'; //your layout name

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) ) {
            $post = Yii::$app->request->post();
            $loginForm = $post['LoginForm'];

            $responden = Responden::find()->where(['nama' => $loginForm['username']])->andWhere(['is_sample' => true])->one();
            if(!$responden){
                    throw new \yii\web\NotFoundHttpException("You Cannot Access This Page!");
            }
            $model->login();
            return $this->redirect(['/responden/view-sample', 'id' => $responden->id]);

            // return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login-sample', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('home-training');

        // return $this->goHome();
    }
    public function actionLogoutSample()
    {
        Yii::$app->user->logout();
        return $this->redirect('home');

        // return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $connection = \Yii::$app->db;

        $transaction = $connection->beginTransaction();
        $model = new SignupForm();
        $responden = new Responden();

        try {
            if ($model->load(Yii::$app->request->post())) {
                $post = Yii::$app->request->post();
                $dataSignup  = $post['SignupForm'];

                $responden->nama = $dataSignup['username'];
                $responden->email = $dataSignup['email'];

                if(!$responden->save()){
                    return json_encode($responden->errors);
                }
                
                $model->signup();
                $transaction->commit();

                Yii::$app->session->setFlash('success', 'Thank you for registration. Please Login.');
                return $this->goHome();
            }

        } catch (\Exception $e) {
            $transaction->rollback();
            throw new Exception("gagal save");
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionSignupSample()
    {
        $this->layout = 'main-sample'; //your layout name

        $connection = \Yii::$app->db;

        $transaction = $connection->beginTransaction();
        $model = new SignupForm();
        $responden = new Responden();

        try {
            if ($model->load(Yii::$app->request->post())) {
                $post = Yii::$app->request->post();
                $dataSignup  = $post['SignupForm'];

                $responden->nama = $dataSignup['username'];
                $responden->email = $dataSignup['email'];
                $responden->is_sample = true;

                if(!$responden->save()){
                    return json_encode($responden->errors);
                }
                
                $model->signup();
                $transaction->commit();

                Yii::$app->session->setFlash('success', 'Thank you for registration. Please Login.');
                return $this->redirect('login-sample');
            }

        } catch (\Exception $e) {
            $transaction->rollback();
            throw new Exception("gagal save");
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
