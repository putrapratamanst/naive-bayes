<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

$baseUrl = Yii::getAlias('@frontend/web');

/* @var $this yii\web\View */
/* @var $model frontend\models\Responden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responden-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList(['P' => 'Perempuan', 'L' => 'Laki-Laki'], ['prompt' => 'Pilih Jenis Kelamin']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(
        DatePicker::className(),
        [
            // inline too, not bad
            'inline' => true,
            // modify template for custom rendering
            'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd '
            ]
        ]
    ); ?>
    <?= $form->field($model, 'no_telepon')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'cv')->fileInput() ?>


    <?php

    if ($model->cv) {
        $cv = str_replace($baseUrl, "", $model->cv);

        echo Html::a(
            'Lihat CV',
            $cv,
            [
                'title' => 'Go!',
                'target' => '_blank'
            ]
        );
    }
    ?>


    <hr class="new5">

    <?= $form->field($model, 'portofolio')->fileInput() ?>

    <?php

    if ($model->portofolio) {
        $portofolio = str_replace($baseUrl, "", $model->portofolio);

        echo Html::a(
            'Lihat Portofolio',
            $portofolio,
            [
                'title' => 'Go!',
                'target' => '_blank'
            ]
        );
    }
    ?>

    <hr class="new5">

    <?= $form->field($model, 'ijazah')->fileInput() ?>

    <?php

    if ($model->ijazah) {
        $ijazah = str_replace($baseUrl, "", $model->ijazah);

        echo Html::a(
            'Lihat Ijazah',
            $ijazah,
            [
                'title' => 'Go!',
                'target' => '_blank'
            ]
        );
    }
    ?>


    <div class="form-group">
        <?= Html::a('Back', ['/responden/view', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    hr.new5 {
        border-top: 1px dashed red;
    }
</style>
