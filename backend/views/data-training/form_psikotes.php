<?php

use frontend\models\Pilihan;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DataTraining */


?>
<h1><?= $judulTes ?></h1>
<div class="data-training-view">
    <form action=<?= $action ?> method="post">

        <?php foreach ($soal as $key => $data) { ?>
            <div class="myDiv">
                <?php echo $data['id'] . ". " . $data['pertanyaan']; ?><br>
                <?php
                $pilihan = Pilihan::find()->where(['id_soal' => $data['id']])->asArray()->all();
                foreach ($pilihan as $keys => $pilihans) { ?>
                    <input name="pilihan[<?php echo $data['id'] ?>]" type="radio" value=<?= $pilihans['pilihan'] ?> required> <?= $pilihans['pilihan'] ?>. <?php echo $pilihans['keterangan']; ?><br>
                <?php }
                ?>
            </div>
            <br>
        <?php     } ?>
        <input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
        <input type="hidden" id="idResponden" name="idResponden" value=<?= $idResponden ?>>

    </form>


</div>
<style>
    .myDiv {
        border: 5px outset white;
        background-color: lightblue;
        margin: 10px;
        padding: 10px;
    }
</style>
