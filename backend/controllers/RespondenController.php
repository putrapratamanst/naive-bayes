<?php

namespace backend\controllers;

use Yii;
use backend\models\Responden;
use backend\models\RespondenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\Response;

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
        // $this->layout = "main-old";
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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

    public function actionGetAttribute()
    {
    
        $dataAttribute = Yii::$app->db2->createCommand('SELECT * FROM nbc_atribut')->queryAll();
        $atribut = array();

        foreach ($dataAttribute as $row) {
            $atribut[$row['id_atribut']] = $row['atribut'];
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        return Json::encode($atribut);
    }

    public function actionGetParameter()
    {
    
        $dataParameter = Yii::$app->db2->createCommand('SELECT * FROM nbc_parameter ORDER BY id_atribut,id_parameter')->queryAll();
        $parameter = array();
        $id_atribut = 0;

        foreach ($dataParameter as $row) {
            if ($id_atribut != $row['id_atribut']) {
                $parameter[$row['id_atribut']] = array();
                $id_atribut = $row['id_atribut'];
            }
            
            $parameter[$row['id_atribut']][$row['nilai']] = $row['parameter'];
        }

        return json_encode($parameter);
    }

    public function actionGetDataTraining()
    {
    
        $dataTraining = Yii::$app->db2->createCommand('SELECT * FROM nbc_data a JOIN nbc_responden b USING(id_responden) ORDER BY a.id_data')->queryAll();
        $data = array();
        $responden = array();
        $parameter = array();
        $id_responden = 0;
        // $jml_atribut = count(json_decode($this->actionGetAttribute(), true));



        $dataAttribute = Yii::$app->db2->createCommand('SELECT * FROM nbc_atribut')->queryAll();
        $atribut = array();

        foreach ($dataAttribute as $row) {
            $atribut[$row['id_atribut']] = $row['atribut'];
        }
        $jml_atribut = count($atribut);
        
        $dataParameter = Yii::$app->db2->createCommand('SELECT * FROM nbc_parameter ORDER BY id_atribut,id_parameter')->queryAll();
        $parameter = array();
        $id_atribut = 0;

        foreach ($dataParameter as $row) {
            if ($id_atribut != $row['id_atribut']) {
                $parameter[$row['id_atribut']] = array();
                $id_atribut = $row['id_atribut'];
            }

            $parameter[$row['id_atribut']][$row['nilai']] = $row['parameter'];
        }
        foreach ($dataTraining as $row) {
            if ($id_responden != $row['id_responden']) {
                $responden[$row['id_responden']] = $row['responden'];
                $data[$row['id_responden']] = array();
                $id_responden = $row['id_responden'];
            }
            $data[$row['id_responden']][$row['id_atribut']] = $row['id_parameter'];
        }

        // $this->layout = "main-old";
        return $this->render('data-training', [
            'data' => $data,
            'jml_atribut'=> $jml_atribut,
            'atribut'=> $atribut,
            'responden'=> $responden,
            'parameter'=> $parameter,

        ]);
    }
}
