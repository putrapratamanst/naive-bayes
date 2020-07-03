<?php

use backend\models\Attributes;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParameterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parameters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="x_panel">

    <div class="parameter-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <!-- Html::a('Create Parameter', ['create'], ['class' => 'btn btn-success']) ?> -->
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                // 'id',
                // 'id_attribute',
                [
                    'attribute' => 'id_attribute',
                    'label'     => 'Attribute',
                    'value'     => function ($model) {
                        $data = Attributes::find()->select('attribute_name')->where(['id' => $model->id_attribute])->one();
                        return $data->attribute_name;
                    }
                ],
                'parameter_name',

                [
                    'attribute' => 'value',
                    'label'     => 'Bobot'
                ],

                // ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>


    </div>
</div>
