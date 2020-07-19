<?php

namespace backend\controllers;

use backend\models\Attributes;
use backend\models\DataSample;
use backend\models\DataTraining;
use Yii;
use backend\models\Responden;
use backend\models\RespondenSearch;
use frontend\models\Parameter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $dataProviderFisik = $searchModel->searchFisik(Yii::$app->request->queryParams);
        $dataProviderWawancara = $searchModel->searchWawancara(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderFisik' => $dataProviderFisik,
            'dataProviderWawancara' => $dataProviderWawancara,
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

    public function actionViewFisik($id)
    {
        $dataTrainingUser = DataTraining::find()->where(['id_responden' => $id])->andWhere(['not', ['id_parameter' => null]])->asArray()->all();

        return $this->render('view-fisik', [
            'model' => $this->findModel($id),
            'dataTrainingUser' => $dataTrainingUser,
        ]);
    }

    public function actionViewWawancara($id)
    {
        return $this->render('view-wawancara', [
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

    public function actionVerifDataPelamarSuccess($id)
    {
        $model = $this->findModel($id);
        $model->verif_data_pelamar = "1";
        $model->save();
        $this->sendEmail([
            'email' => $model->email,
            'status' => "GAGAL",
            'title' => 'VERIFIKASI DATA PELAMAR'
        ]);
        return $this->redirect(['view', 'id' => $model->id]);
    }
    public function actionVerifDataPelamarGagal($id)
    {
        $model = $this->findModel($id);
        $model->verif_data_pelamar = "0";
        $model->save();
        $this->sendEmail([
            'email' => $model->email,
            'status' => "GAGAL",
            'title' => 'VERIFIKASI DATA PELAMAR'
        ]);

        return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionVerifDataKesehatanSuccess($id)
    {
        $model = $this->findModel($id);
        $model->verif_kesehatan = "1";
        $model->save();
        $this->sendEmail([
            'email' => $model->email,
            'status' => "GAGAL",
            'title' => 'VERIFIKASI DATA PELAMAR'
        ]);

        return $this->redirect(['view-fisik', 'id' => $model->id]);
    }
    public function actionVerifDataKesehatanGagal($id)
    {
        $model = $this->findModel($id);
        $model->verif_kesehatan = "0";
        $model->save();
        $this->sendEmail([
            'email' => $model->email,
            'status' => "GAGAL",
            'title' => 'VERIFIKASI DATA PELAMAR'
        ]);

        return $this->redirect(['view-fisik', 'id' => $model->id]);
    }

    public function actionVerifDataWawancaraSuccess($id)
    {
        $model = $this->findModel($id);
        $model->verif_wawancara = "1";
        $model->save();
        $this->sendEmail([
            'email' => $model->email,
            'status' => "GAGAL",
            'title' => 'VERIFIKASI DATA PELAMAR'
        ]);

        return $this->redirect(['view-wawancara', 'id' => $model->id]);
    }
    public function actionVerifDataWawancaraGagal($id)
    {
        $model = $this->findModel($id);
        $model->verif_wawancara = "0";
        $model->save();
        return $this->redirect(['view-wawancara', 'id' => $model->id]);
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

        return $atribut;
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

        $data = array();
        $id_responden = 0;
        $jml_atribut = count($this->actionGetAttribute());

        $result = Yii::$app->db2->createCommand('SELECT * FROM nbc_data a JOIN nbc_responden b USING(id_responden) ORDER BY a.id_data')->queryAll();

        //attribute
        $dataAttribute = Yii::$app->db2->createCommand('SELECT * FROM nbc_atribut')->queryAll();
        $atribut = array();

        foreach ($dataAttribute as $row) {
            $atribut[$row['id_atribut']] = $row['atribut'];
        }


        //parameter
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

        //responden
        $data = array();
        $responden = array();
        $id_responden = 0;

        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($result as $row) {
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
            'parameter' => $parameter,
            'atribut' => $atribut,
            'jml_atribut' => $jml_atribut,
            'responden' => $responden,

        ]);
    }

    public function actionDataTraining()
    {
        $attribute = AttributesController::actionList();
        $jml_atribut = count($attribute);
        $parameter = ParameterController::actionList();

        $result = $this->resultDataTraining();
        $data = $result['data'];
        $responden = $result['responden'];

        return $this->render('naive-bayes-data-training', [
            'data'         => $data,
            'parameter'    => $parameter,
            'atribut'      => $attribute,
            'jml_atribut'  => $jml_atribut,
            'responden'    => $responden,

        ]);
    }
    public function actionDataSample()
    {
        $attribute = AttributesController::actionList();
        $jml_atribut = count($attribute);
        $parameter = ParameterController::actionList();

        $result = $this->resultDataSample();
        $data = $result['data'];
        $responden = $result['responden'];

        return $this->render('naive-bayes-data-sample', [
            'data'         => $data,
            'parameter'    => $parameter,
            'atribut'      => $attribute,
            'jml_atribut'  => $jml_atribut,
            'responden'    => $responden,

        ]);
    }


    public function moveElement($a, $i, $j)
    {
        $k = $a[$i];
        $a[$i] = $a[$j];
        $a[$j] = $k;
        return $a;
    }

    public function actionFrequensiData()
    {
        $attribute = AttributesController::actionList();
        $jml_atribut = count($attribute);
        $parameter = ParameterController::actionList();
        $result = $this->resultDataTraining();
        $data = $result['data'];
        $responden = $result['responden'];

        $newData = [];
        $countFrequensi =
            [
                [
                    'status' => 'Lulus',
                    'count'  => 0
                ],
                [
                    'status' => 'Tidak Lulus',
                    'count' => 0,
                ]
            ];

        foreach ($data as $key => $value) {
            if ($value['7'] < 14) {
                $countFrequensi[1]['count']++;
            } else {
                $countFrequensi[0]['count']++;
            }
            // unset($value['7']);
            array_push($newData, $value);
        }
        $freq = $this->freq($jml_atribut);
        $prior_freq = $this->prior_freq($newData, $jml_atribut, $freq);

        //bentuk data berdasarkan attribut
        $temp = [];


        foreach ($attribute as $keyAttribute => $valueAttribute) {
            foreach ($parameter[$keyAttribute] as $keyParameter => $valueParameter) {

                $temp[$valueAttribute][$valueParameter]['lulus']['jumlah'] = 0;
                $temp[$valueAttribute][$valueParameter]['tidak_lulus']['jumlah']= 0;

                foreach ($data as $keyData => $valueData) {
                    foreach ($valueData as $keyValueDataLast => $valueDataLast) {
                        if ($keyValueDataLast == $keyAttribute) {
                            if($keyParameter == $valueDataLast){
                                if ($valueData[7] >= 14) {
                                    $temp[$valueAttribute][$valueParameter]['lulus']['jumlah'] ++ ;
                                } else {
                                    $temp[$valueAttribute][$valueParameter]['tidak_lulus']['jumlah'] ++;
                                }
                            }
                        }
                    }
                }
            }
        }
        return $this->render('frequensi-data', [
            'jml_atribut'  => $jml_atribut,
            'parameter'    => $parameter,
            'responden'    => $responden,
            'data'         => $newData,
            'attribute'    => $attribute,
            'countFrequensi'    => $countFrequensi,
            'freq'    => $freq,
            'prior_freq'    => $prior_freq,
            'data_by_attribute'    => $temp,
        ]);
    }

    public function freq($jml_atribut)
    {
        $freq = array();
        //-- inisialisasi data awal $freq
        for ($i = 2; $i <= $jml_atribut; $i++) {
            for ($j = 0; $j < 4; $j++) {
                for ($k = 0; $k < 3; $k++) {
                    $freq[$i][$j][$k] = 0;
                }
            }
        }

        return $freq;
    }

    public function prior_freq($data, $jml_atribut, $freq)
    {
        $prior_freq = array();
        $newData = [];
        foreach ($data as  $dataValue) {
            if ($dataValue[7] < 14) {
                $dataValue[7] = 1;
            } else {
                $dataValue[7] = 2;
            }

            $move = $this->moveElement($dataValue, 7, 1);
            array_push($newData, $move);
        }

        //-- iterasi tiap data training
        foreach ($newData as $i => $v) {
            //-- hitung freq tiap atribut
            for ($j = 2; $j <= $jml_atribut; $j++) {
                $freq[$j][$v[$j]][$v[1]] += 1;
            }
            // //-- hitung feq prior/kelas
            if (!isset($prior_freq[$v[1]])) $prior_freq[$v[1]] = 0;
            $prior_freq[$v[1]] += 1;
        }

        ksort($prior_freq);

        return $prior_freq;
    }
    public function resultDataTraining()
    {
        $list = DataTraining::find()->select(['data_training.id', 'data_training.id_attribute', 'id_responden', 'id_parameter', 'responden.nama', 'parameter.value'])->joinWith(['responden', 'parameterRelation'])
            ->where(['verif_data_pelamar' => "1"])->andWhere(['verif_kesehatan' => "1"])
            ->asArray()->all();
        //responden
        $data = array();
        $responden = array();
        $id_responden = 0;

        $sumValue = 0;
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($list as $row) {
            if ($id_responden != $row['id_responden']) {
                $responden[$row['id_responden']] = $row['nama'];
                $data[$row['id_responden']] = array();
                $id_responden = $row['id_responden'];
                $sumValue = 0;
            }

            if ($id_responden == $row['id_responden']) {
                $sumValue += $row['value'];
            }
            $data[$row['id_responden']][$row['id_attribute']] = $row['value'];
            $data[$row['id_responden']][$row['id_attribute'] + 1] = $sumValue;
        }

        return [
            'data' => $data,
            'responden' => $responden,
        ];
    }

    public function resultDataSample()
    {
        $list = DataSample::find()->select(['data_sample.id', 'data_sample.id_attribute', 'id_responden', 'id_parameter', 'responden.nama', 'parameter.value'])->joinWith(['responden', 'parameterRelation'])
            ->where(['verif_data_pelamar' => "1"])->andWhere(['verif_kesehatan' => "1"])
            ->asArray()->all();
        //responden
        $data = array();
        $responden = array();
        $id_responden = 0;

        $sumValue = 0;
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($list as $row) {
            if ($id_responden != $row['id_responden']) {
                $responden[$row['id_responden']] = $row['nama'];
                $data[$row['id_responden']] = array();
                $id_responden = $row['id_responden'];
                $sumValue = 0;
            }

            if ($id_responden == $row['id_responden']) {
                $sumValue += $row['value'];
            }
            $data[$row['id_responden']][$row['id_attribute']] = $row['value'];
            $data[$row['id_responden']][$row['id_attribute'] + 1] = $sumValue;
            $data[$row['id_responden']]['responden'] = $row['id_responden'];
            $data[$row['id_responden']]['nama_responden'] = $row['nama'];
        }


        return [
            'data' => $data,
            'responden' => $responden,
        ];
    }

    public function actionProcessDataSample()
    {
        Yii::$app->db->createCommand()->truncateTable('data_sample')->execute();
        $list = DataTraining::find()->select(['data_training.id', 'data_training.id_attribute', 'id_responden', 'id_parameter', 'responden.nama', 'parameter.value'])->joinWith(['responden', 'parameterRelation'])
            ->where(['verif_data_pelamar' => "1"])->andWhere(['verif_kesehatan' => "1"])
            ->asArray()->all();
        //responden
        $data = array();
        $responden = array();
        $id_responden = 0;

        $sumValue = 0;
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($list as $row) {
            if ($id_responden != $row['id_responden']) {
                $responden[$row['id_responden']] = $row['nama'];
                $data[$row['id_responden']] = array();
                $id_responden = $row['id_responden'];
                $sumValue = 0;
            }

            if ($id_responden == $row['id_responden']) {
                $sumValue += $row['value'];
            }
            $data[$row['id_responden']][$row['id_attribute']] = $row['value'];
            $data[$row['id_responden']][$row['id_attribute'] + 1] = $sumValue;
            $data[$row['id_responden']]['responden'] = $row['id_responden'];
        }

        shuffle($data);
        $newData = array_slice($data, 1, 50);
        foreach ($newData as $value) {
            foreach ($value as $key => $values) {
                if ($key != 7 && $key != "responden") {
                    $dataSample = new DataSample();
                    $dataSample->id_responden = $value['responden'];
                    $dataSample->id_attribute = $key;
                    $dataSample->id_parameter = $this->getParameterByAttributeValue($key, $values);
                    $dataSample->save();
                }
            }
        }
        return $this->redirect('data-sample');
    }

    public function getParameterByAttributeValue($attribute, $value)
    {
        return Parameter::find()->where(['id_attribute' => $attribute])->andWhere(['value' => $value])
            ->one()['id'];
    }
    public function sendEmail($params)
    {
        try {
            Yii::$app->mailer->compose()
                ->setFrom("putrapratamanst@gmail.com")
                ->setTo($params['email'])
                ->setSubject('Notfication: ' . $params['status'])
                ->setTextBody('Plain text content')
                ->send();
        } catch (\Swift_TransportException $e) {
            var_dump($e->getMessage());
        }
        // \Yii::$app->mailer->compose('template', [
        //     'email' => $params['email'],
        //     'status' => $params['status'],
        //     'title' => $params['title'],
        //     ])
        //     ->setFrom("putrapratamanst@gmail.com")
        //     ->setTo($params['email'])
        //     ->setSubject('Notfication: '. $params['status'])
        //     ->send();
    }

    public function actionDataTestingPrediksi()
    {
        $attribute = AttributesController::actionList();
        $jml_atribut = count($attribute);
        $parameter = ParameterController::actionList();
        $result = $this->resultDataTraining(); //memang masih pake data training
        $data = $result['data'];
        $responden = $result['responden'];

        $newData = [];
        $countFrequensi =
            [
                [
                    'status' => 'Lulus',
                    'count'  => 0
                ],
                [
                    'status' => 'Tidak Lulus',
                    'count' => 0,
                ]
            ];

        foreach ($data as $key => $value) {
            if ($value['7'] < 14) {
                $countFrequensi[1]['count']++;
            } else {
                $countFrequensi[0]['count']++;
            }
            // unset($value['7']);
            array_push($newData, $value);
        }

        //bentuk data berdasarkan attribut
        $temp = [];

        foreach ($attribute as $keyAttribute => $valueAttribute) {
            foreach ($parameter[$keyAttribute] as $keyParameter => $valueParameter) {

                $temp[$valueAttribute][$valueParameter]['lulus']['jumlah'] = 0;
                $temp[$valueAttribute][$valueParameter]['tidak_lulus']['jumlah'] = 0;

                foreach ($data as $keyData => $valueData) {
                    foreach ($valueData as $keyValueDataLast => $valueDataLast) {
                        if ($keyValueDataLast == $keyAttribute) {
                            if ($keyParameter == $valueDataLast) {
                                if ($valueData[7] >= 14) {
                                    $temp[$valueAttribute][$valueParameter]['lulus']['jumlah']++;
                                } else {
                                    $temp[$valueAttribute][$valueParameter]['tidak_lulus']['jumlah']++;
                                }
                            }
                        }
                    }
                }
            }
        }
        
        for ($i = 1; $i <= $jml_atribut ; $i++) {
            foreach ($parameter[$i] as $nilai => $param) {
                foreach ($temp[$attribute[$i]][$param] as $key => $value) {
                    if ($key == "lulus") {
                        $temp[$attribute[$i]][$param][$key]['persen'] = round($value['jumlah'] / $countFrequensi[0]['count'] * 100) / 100;
                    } else {
                        $temp[$attribute[$i]][$param][$key]['persen'] = round($value['jumlah'] / $countFrequensi[1]['count'] * 100) / 100;
                    }

                }
            }
        }
        $dataSample = $this->resultDataSample();
        $dataResultSample = $dataSample['data'];
        $newDataSample =   [];

        return $this->render('prediksi-data-testing', [
            'jml_atribut'  => $jml_atribut,
            'parameter'    => $parameter,
            'responden'    => $responden,
            'data'         => $newData,
            'attribute'    => $attribute,
            'countFrequensi'    => $countFrequensi,
            'data_by_attribute'    => $temp,
            'data_sample_by_attribute'    => $newDataSample,
            'dataResultSample'    => $dataResultSample,
        ]);

    }
}
