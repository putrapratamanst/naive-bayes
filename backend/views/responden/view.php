<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Responden */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Respondens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="responden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['/responden'], ['class' => 'btn btn-primary']) ?>
        <!-- = Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            [
                'attribute' => 'jenis_kelamin',
                'value'     => function($model){
                    $jenisKelamin = $model->jenis_kelamin;
                    if($jenisKelamin == "P"){
                        return "Perempuan";
                    } else {
                        return "Laki-laki";
                    }
                }
            ],
        ],
    ]) ?>

</div>
