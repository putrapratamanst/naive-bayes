<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DataTraining */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-training-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_parameter')->dropDownList($parameter, ['prompt' => $prompt]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
