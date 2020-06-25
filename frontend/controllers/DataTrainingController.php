<?php

namespace frontend\controllers;

use frontend\models\Attributes;
use Yii;
use frontend\models\DataTraining;
use frontend\models\DataTrainingSearch;
use frontend\models\Parameter;
use frontend\models\Responden;
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
}
