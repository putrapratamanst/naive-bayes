<?php

namespace frontend\controllers;

use DateTime;
use frontend\models\Attributes;
use frontend\models\DataTraining;
use frontend\models\Parameter;
use Yii;
use frontend\models\Responden;
use frontend\models\RespondenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * RespondenController implements the CRUD actions for Responden model.
 */
class RespondenController extends Controller
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

    /**
     * Lists all Responden models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RespondenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Responden model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $request = Yii::$app->request;
        $idResponden = $request->get('id');
        $getAllDataTraining = DataTraining::find()
            ->select([
                'data_training.id as id',
                'id_responden',
                'parameter.value as value',
                'parameter.parameter_name as parameter_name',
                'attributes.attribute_name as attribute_name',
                'attributes.id as id_attribute',
            ])
            ->leftJoin('attributes', 'data_training.id_attribute = attributes.id')
            ->leftJoin('parameter', 'data_training.id_parameter = parameter.id')
            ->where(['id_responden' => $idResponden])->asArray()->all();

        if (!$getAllDataTraining) {
            $getAttribute = Attributes::find()->asArray()->all();
            foreach ($getAttribute as $value) {
                $modelDataTraining = new DataTraining();
                $modelDataTraining->scenario = "lamaran";
                $modelDataTraining->id_responden = $idResponden;
                $modelDataTraining->id_attribute = $value['id'];
                $modelDataTraining->save();
            }
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Responden model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Responden();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Responden model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        // $model->scenario = 'update';

        if ($model->load(Yii::$app->request->post())) {
            $cv         = UploadedFile::getInstance($model, 'cv');
            $ijazah     = UploadedFile::getInstance($model, 'ijazah');
            $portofolio = UploadedFile::getInstance($model, 'portofolio');

            if (!empty($cv)) {
                $cvToSave = Yii::getAlias('@frontend/web/uploads/cv/') . 'CV_' . $model['nama'] . "." . $cv->extension;
                $cv->saveAs($cvToSave);
                $model->cv = $cvToSave;
            }
            if (!empty($ijazah)) {
                $ijazahToSave = Yii::getAlias('@frontend/web/uploads/ijazah/') . 'IJAZAH_' . $model['nama'] . "." . $ijazah->extension;
                $ijazah->saveAs($ijazahToSave);
                $model->ijazah = $ijazahToSave;
            }
            if (!empty($portofolio)) {
                $portofolioToSave = Yii::getAlias('@frontend/web/uploads/portofolio/') . 'PORTOFOLIO_' . $model['nama'] . "." . $portofolio->extension;
                $portofolio->saveAs($portofolioToSave);
                $model->portofolio = $portofolioToSave;
            }

            if(!empty($model->tanggal_lahir)){
                $birthDate = new DateTime($model->tanggal_lahir);
                $today = new DateTime("today");
                if ($birthDate < $today) {
                    $y = $today->diff($birthDate)->y;
                    $umur = "";
                    switch (true) {
                        case $y <=19 :
                            $umur = 1;
                            break;
                        case ($y >=19 && $y <= 24) :
                            $umur = 2;
                            break;
                        case $y >= 24:
                            $umur = 3;
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
            $dataTraining  = DataTraining::find()->where(['id_responden' => $id])->andWhere(['id_attribute' => 4])->one();
            $dataParam  = Parameter::find()->where(['value' => $umur])->andWhere(['id_attribute' => 4])->one();
            $dataTraining->id_parameter = $dataParam->id;
            $dataTraining->save();

            }
            // if(!$model->save()){
            $model->save(false);
                // die(json_encode($model->errors));
            // }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Responden model.
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
     * Finds the Responden model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Responden the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Responden::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
