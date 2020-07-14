<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RespondenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Respondens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="x_panel">

    <div class="responden-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <!-- <p> -->
             <!-- Html::a('Create Responden', ['create'], ['class' => 'btn btn-success'])  -->
        <!-- </p> -->

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
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

                ['class' => 'yii\grid\ActionColumn','template' => '{view}',],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

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
