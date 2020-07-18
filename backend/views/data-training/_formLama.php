<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataTraining */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-training-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_responden')->textInput() ?>

    <?= $form->field($model, 'id_attribute')->textInput() ?>

    <?= $form->field($model, 'id_parameter')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
