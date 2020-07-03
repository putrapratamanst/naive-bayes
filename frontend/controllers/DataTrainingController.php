<?php

namespace frontend\controllers;

use frontend\models\Attributes;
use Yii;
use frontend\models\DataTraining;
use frontend\models\DataTrainingSearch;
use frontend\models\Jawaban;
use frontend\models\Parameter;
use frontend\models\Pilihan;
use frontend\models\Responden;
use frontend\models\Soal;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataTrainingController implements the CRUD actions for DataTraining model.
 */
class DataTrainingController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    /**
     * Lists all DataTraining models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataTrainingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTraining model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $request = Yii::$app->request;
        $idResponden = $request->get('id');
        $umur = Responden::find()->where(['id' => $idResponden])->one();
        $getAllDataTraining = DataTraining::find()
            ->select([
                'data_training.id as id',
                'id_responden',
                'parameter.value as value',
                'parameter.parameter_name as parameter_name',
                'attributes.attribute_name as attribute_name','attributes.id as id_attribute',

            ])
            ->leftJoin('attributes', 'data_training.id_attribute = attributes.id')
            ->leftJoin('parameter', 'data_training.id_parameter = parameter.id')
            ->where(['id_responden' => $idResponden])->asArray()->all();

       
        // if(!$getAllDataTraining){

        //     return $this->redirect(['create-pendidikan', 'id' => $idResponden]);
        // }
        $provider = new ArrayDataProvider([
            'allModels' => $getAllDataTraining,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('view', [
            'provider'=> $provider,
            'umur'=> $umur->tanggal_lahir
        ]);
    }

    /**
     * Creates a new DataTraining model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataTraining();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreatePendidikan()
    {
        $request = Yii::$app->request;
        $idResponden = $request->get('id');
        $model  = DataTraining::find()->where(['id_responden' => $idResponden])->andWhere(['id_attribute'=> 1])->one();

        $idAttribute = Attributes::find()->where(['attribute_name' => 'Pendidikan'])->one();

        $parameter = Parameter::find()->select(['id','value','parameter_name'])->where(['id_attribute' => 1])->asArray()->all();
        $newParameter = [];

        foreach ($parameter as  $value) {
            $newParameter[$value['id']] = $value['parameter_name'];
        }   

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $idResponden]);
        }

        return $this->render('create-pendidikan', [
            'model' => $model,
            'attribute' => $idAttribute->attribute_name,
            'parameter' => $newParameter,
            'prompt'    => "Pilih Pendidikan"

        ]);
    }

    public function actionCreateIpk()
    {
        $request = Yii::$app->request;
        $idResponden = $request->get('id');
        $model  = DataTraining::find()->where(['id_responden' => $idResponden])->andWhere(['id_attribute'=> 2])->one();

        $idAttribute = Attributes::find()->where(['attribute_name' => 'IPK'])->one();

        $parameter = Parameter::find()->select(['id','value','parameter_name'])->where(['id_attribute' => 2])->asArray()->all();
        $newParameter = [];

        foreach ($parameter as  $value) {
            $newParameter[$value['id']] = $value['parameter_name'];
        }   

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $idResponden]);
        }

        return $this->render('create-pendidikan', [
            'model' => $model,
            'attribute' => $idAttribute->attribute_name,
            'parameter' => $newParameter,
            'prompt'    => "Pilih IPK"
        ]);
    }

    public function actionCreatePengalamanKerja()
    {
        $request = Yii::$app->request;
        $idResponden = $request->get('id');
        $model  = DataTraining::find()->where(['id_responden' => $idResponden])->andWhere(['id_attribute'=> 3])->one();

        $idAttribute = Attributes::find()->where(['attribute_name' => 'Pengalaman Kerja'])->one();

        $parameter = Parameter::find()->select(['id','value','parameter_name'])->where(['id_attribute' => 3])->asArray()->all();
        $newParameter = [];

        foreach ($parameter as  $value) {
            $newParameter[$value['id']] = $value['parameter_name'];
        }   

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $idResponden]);
        }

        return $this->render('create-pendidikan', [
            'model' => $model,
            'attribute' => $idAttribute->attribute_name,
            'parameter' => $newParameter,
            'prompt'    => "Pilih Pengalaman Kerja"
        ]);
    }

    /**
     * Updates an existing DataTraining model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTraining model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTraining model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DataTraining the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DataTraining::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionCreatePsikotes()
    {
        Yii::$app->controller->enableCsrfValidation = false;

        $request = Yii::$app->request;
        $idResponden = $request->get('id');

        $soal = Soal::find()->where(['type' => 1])->asArray()->all();
        return $this->render('form_psikotes', [
            'soal' => $soal,
            'idResponden' => $idResponden,
            'judulTes'=> "PSIKOTES",
            'action'=> "/data-training/proses-psikotes/"
        ]);
    }

    public function actionProsesPsikotes()
    {
        Yii::$app->controller->enableCsrfValidation = false;

        $post = Yii::$app->request->post();
       
        $idResponden = $post['idResponden'];
 
        $pilihan = isset($post['pilihan']) ? $post['pilihan'] : [];
        if(count($pilihan) < 10){
            Yii::$app->session->setFlash('danger', "Anda belum menyelesaikan Psikotes!");
            return $this->redirect(['create-psikotes', 'id' => $idResponden]);
        }

        $hasilPsikotes = 0;
        foreach ($pilihan as $key => $pilihans) {
            $salahBenar = Pilihan::find()
                ->select('benar_salah')
                ->where(['id_soal' => $key])
                ->andWhere(['pilihan' => $pilihans])
                ->asArray()
                ->one();
            $jawaban = new Jawaban();
            $jawaban->id_responden = $idResponden;
            $jawaban->id_soal = $key;
            $jawaban->type = 1;
            $jawaban->jawaban = $pilihans;
            $jawaban->benar_salah = $salahBenar['benar_salah'];
            if (!$jawaban->save()) {
                echo "<pre>";
                print_r($jawaban->errors);
                die;
            }
            if($salahBenar['benar_salah'] == 1){
                $hasilPsikotes = $hasilPsikotes + 10;
            }
        }

        $dataTraining = DataTraining::find()
            ->where(['id_responden' => $idResponden])
            ->andWhere((['id_attribute' => 5]))
            ->one();
        if($hasilPsikotes > 50){
            $dataTraining->id_parameter = 14;
            $dataTraining->save(false);
        } else {
            $dataTraining->id_parameter = 13;
            $dataTraining->save(false);
        }

        return $this->redirect(['view', 'id' => $idResponden]);

    }

    public function actionCreateIq()
    {
        Yii::$app->controller->enableCsrfValidation = false;

        $request = Yii::$app->request;
        $idResponden = $request->get('id');

        $soal = Soal::find()->where(['type' => 2])->asArray()->all();
        return $this->render('form_psikotes', [
            'soal' => $soal,
            'idResponden' => $idResponden,
            'judulTes' => "TEST IQ",
            'action' => "/data-training/proses-iq/"
        ]);
    }

    public function actionProsesIq()
    {
        Yii::$app->controller->enableCsrfValidation = false;

        $post = Yii::$app->request->post();

        $idResponden = $post['idResponden'];

        $pilihan = isset($post['pilihan']) ? $post['pilihan'] : [];
        if (count($pilihan) < 10) {
            Yii::$app->session->setFlash('danger', "Anda belum menyelesaikan Psikotes!");
            return $this->redirect(['create-psikotes', 'id' => $idResponden]);
        }

        $hasilPsikotes = 0;
        foreach ($pilihan as $key => $pilihans) {
            $salahBenar = Pilihan::find()
                ->select('benar_salah')
                ->where(['id_soal' => $key])
                ->andWhere(['pilihan' => $pilihans])
                ->asArray()
                ->one();
            $jawaban = new Jawaban();
            $jawaban->id_responden = $idResponden;
            $jawaban->id_soal = $key;
            $jawaban->type = 2;
            $jawaban->jawaban = $pilihans;
            $jawaban->benar_salah = $salahBenar['benar_salah'];
            if(!$jawaban->save()){
                echo"<pre>";print_r($jawaban->errors);die;
            }
            if ($salahBenar['benar_salah'] == 1) {
                $hasilPsikotes = $hasilPsikotes + 10;
            }
        }

        $dataTraining = DataTraining::find()
            ->where(['id_responden' => $idResponden])
            ->andWhere((['id_attribute' => 6]))
            ->one();
        if ($hasilPsikotes > 50) {
            $dataTraining->id_parameter = 16;
            $dataTraining->save(false);
        } else {
            $dataTraining->id_parameter = 15;
            $dataTraining->save(false);
        }

        return $this->redirect(['view', 'id' => $idResponden]);
    }
}
