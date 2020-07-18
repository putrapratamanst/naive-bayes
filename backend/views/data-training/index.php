<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DataTrainingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Trainings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-training-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Training', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_responden',
            'id_attribute',
            'id_parameter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
