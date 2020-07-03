<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SoalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soals';
$this->params['breadcrumbs'][] = $this->title;
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TEST IQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PSIKOTES</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="soal-index">

                            <h1><?= Html::encode("TEST IQ") ?></h1>

                            <p>
                                <!-- Html::a('Create Soal', ['create'], ['class' => 'btn btn-success']) ?> -->
                            </p>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); 
                            ?>

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider1,
                                // 'filterModel' => $searchModel,
                                'layout' => '{items}{pager}',
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    // 'id',
                                    'pertanyaan:ntext',
                                    // 'type',

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{view}',
                                    ],
                                ],
                            ]); ?>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="soal-index">

                            <h1><?= Html::encode("PSIKOTES") ?></h1>

                            <p>
                                <!-- Html::a('Create Soal', ['create'], ['class' => 'btn btn-success']) ?> -->
                            </p>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); 
                            ?>

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider2,
                                // 'filterModel' => $searchModel,
                                'layout' => '{items}{pager}',
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    // 'id',
                                    'pertanyaan:ntext',
                                    // 'type',

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{view}',
                                    ],
                                ],
                            ]); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

