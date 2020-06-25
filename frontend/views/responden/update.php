<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Responden */

$this->title = 'Update Data Diri Pelamar: ' . $model->nama;
// $this->params['breadcrumbs'][] = ['label' => 'Respondens', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="responden-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="col-md-3">
    </div>
        <div class="col-md-6">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
