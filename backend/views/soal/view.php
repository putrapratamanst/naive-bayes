<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model backend\models\Soal */

$this->title = "Soal No:" . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Soals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="soal-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr>
                <th>Pertanyaan</th>
                <td><?= $model->pertanyaan; ?></td>
            </tr>
            <tr>
                <th>Pilihan</th>
                <td>
                    <?php 
                    foreach ($pilihan as $key => $value) {
                        if($value['benar_salah'] ==  true){
                            echo " <b><u>" . $value['pilihan'] . ". " . $value['keterangan']. "</u></b>";
                        } else {
                            echo " ".$value['pilihan'] . ". ". $value['keterangan'];
                        }
                     }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

</div>
