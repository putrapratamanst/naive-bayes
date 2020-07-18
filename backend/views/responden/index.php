<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RespondenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<div class="col-md-12">

    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Soal</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Verifikasi Data Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisik-tab" data-toggle="tab" href="#fisik" role="tab" aria-controls="fisik" aria-selected="false">Verifikasi Kesehatan, Tulis & Fisik </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="wawancara-tab" data-toggle="tab" href="#wawancara" role="tab" aria-controls="wawancara" aria-selected="false">Verifikasi Wawancara </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="responden-index">

                        <h1>VERIFIKASI DATA PELAMAR</h1>

                        <!-- <p> -->
                        <!-- Html::a('Create Responden', ['create'], ['class' => 'btn btn-success'])  -->
                        <!-- </p> -->

                        <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); 
                        ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel'  => $searchModel,
                            'layout'      => "{summary}{items}",
                            'pager' => [

                                'class' => '\yii\widgets\LinkPager',

                                //other pager config if nesessary

                            ],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id',
                                'nama',
                                [
                                    'attribute' => 'jenis_kelamin',
                                    'value'     => function ($model) {
                                        $jenisKelamin = $model->jenis_kelamin;
                                        if ($jenisKelamin == "P") {
                                            return "Perempuan";
                                        } else {
                                            return "Laki-laki";
                                        }
                                    }
                                ],

                                [
                                    'class' => 'yii\grid\ActionColumn', 'template' => '{view}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            $status = "";
                                            switch ($model->verif_data_pelamar) {
                                                case '1':
                                                    $status = "(LOLOS)";
                                                    break;
                                                case '0':
                                                    $status = "(GAGAL)";
                                                    break;

                                                default:
                                                    '';
                                                    break;
                                            }
                                            return Html::a('  <span style="color:#17a2b8";>Verifikasi </span>', $url) . $status;
                                        }
                                    ]
                                ],
                            ],
                        ]); ?>

                        <?php Pjax::end(); ?>

                    </div>

                </div>
                <div class="tab-pane fade" id="fisik" role="tabpanel" aria-labelledby="fisik-tab">
                    <div class="responden-index">
                        <h1>VERIFIKASI KESEHATAN, TULIS & FISIK </h1>

                        <!-- <p> -->
                        <!-- Html::a('Create Responden', ['create'], ['class' => 'btn btn-success'])  -->
                        <!-- </p> -->

                        <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); 
                        ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProviderFisik,
                            'filterModel' => $searchModel,
                            'pager' => [

                                'class' => '\yii\widgets\LinkPager',

                                //other pager config if nesessary

                            ],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id',
                                'nama',
                                [
                                    'attribute' => 'jenis_kelamin',
                                    'value'     => function ($model) {
                                        $jenisKelamin = $model->jenis_kelamin;
                                        if ($jenisKelamin == "P") {
                                            return "Perempuan";
                                        } else {
                                            return "Laki-laki";
                                        }
                                    }
                                ],

                                [
                                    'class' => 'yii\grid\ActionColumn', 'template' => '{view}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            $status = "";
                                            switch ($model->verif_kesehatan) {
                                                case '1':
                                                    $status = "(LOLOS)";
                                                    break;
                                                case '0':
                                                    $status = "(GAGAL)";
                                                    break;

                                                default:
                                                    '';
                                                    break;
                                            }
                                            $url = Url::to(['responden/view-fisik', 'id' => $model->id]);

                                            return Html::a('  <span style="color:#17a2b8";>Verifikasi </span>', $url) . $status;
                                        }
                                    ]
                                ],
                            ],
                        ]); ?>

                        <?php Pjax::end(); ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="wawancara" role="tabpanel" aria-labelledby="wawancara-tab">
                    <div class="responden-index">
                        <h1>VERIFIKASI WAWANCARA</h1>

                        <!-- <p> -->
                        <!-- Html::a('Create Responden', ['create'], ['class' => 'btn btn-success'])  -->
                        <!-- </p> -->

                        <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); 
                        ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProviderWawancara,
                            'filterModel' => $searchModel,
                            'pager' => [

                                'class' => '\yii\widgets\LinkPager',

                                //other pager config if nesessary

                            ],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id',
                                'nama',
                                [
                                    'attribute' => 'jenis_kelamin',
                                    'value'     => function ($model) {
                                        $jenisKelamin = $model->jenis_kelamin;
                                        if ($jenisKelamin == "P") {
                                            return "Perempuan";
                                        } else {
                                            return "Laki-laki";
                                        }
                                    }
                                ],

                                [
                                    'class' => 'yii\grid\ActionColumn', 'template' => '{view}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            $status = "";
                                            switch ($model->verif_wawancara) {
                                                case '1':
                                                    $status = "(LOLOS)";
                                                    break;
                                                case '0':
                                                    $status = "(GAGAL)";
                                                    break;

                                                default:
                                                    '';
                                                    break;
                                            }
                                            $url = Url::to(['responden/view-wawancara', 'id' => $model->id]);

                                            return Html::a('  <span style="color:#17a2b8";>Verifikasi </span>', $url) . $status;
                                        }
                                    ]
                                ],
                            ],
                        ]); ?>

                        <?php Pjax::end(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<style>
    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px;
    }

    .pagination>li {
        display: inline;
    }

    .pagination>li>a,
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    ul {
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }
</style>
