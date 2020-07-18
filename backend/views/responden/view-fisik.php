<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Responden */

$ipFrontend = "localhost:8002/";
$status = "";
switch ($model->verif_kesehatan) {
    case '1':
        $status = "(LOLOS)";
        break;
    case '0':
        $status = "(GAGAL)";
        break;
    
    default:
        '';
        break;
}
$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Respondens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="responden-view">

    <h1><?= "Data Pelamar: " . Html::encode($this->title). " {$status}" ?></h1>

    <p>
        <?= Html::a('Back', ['/responden'], ['class' => 'btn btn-primary']) ?>
        <?php

        if (count($dataTrainingUser) <= 6 && $model->verif_kesehatan == NULL) {
            
            ?>
            <?= Html::a('Input Verifikasi', ['/data-training/view', 'id' => $model->id], ['class' => 'btn btn-warning pull-right']) ?>
        <?php } ?>
    </p>



    <?= DetailView::widget([
        'model' => $model, 'attributes' => [
            // 'id',
            'nama',
            'email:email',
            'no_telepon',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            [
                'attribute' => 'cv',
                'format'    => 'raw',
                'value' => function ($model) use ($ipFrontend) {
                    if ($model->cv) {

                        $baseUrl = Yii::getAlias('@frontend/web');
                        $newUrl = str_replace($baseUrl, "", $model->cv);
                        return Html::a(
                            'Lihat CV',
                            $ipFrontend . $newUrl,
                            [
                                'title' => 'Go!',
                                'target' => '_blank'
                            ]
                        );
                    }
                }
            ],
            [
                'attribute' => 'ijazah',
                'format'    => 'raw',
                'value' => function ($model) use ($ipFrontend) {
                    if ($model->ijazah) {

                        $baseUrl = Yii::getAlias('@frontend/web');
                        $newUrl = str_replace($baseUrl, "", $model->ijazah);
                        return Html::a(
                            'Lihat Ijazah',
                            $ipFrontend . $newUrl,
                            [
                                'title' => 'Go!',
                                'target' => '_blank'
                            ]
                        );
                    }
                }
            ],
            [
                'attribute' => 'portofolio',
                'format'    => 'raw',
                'value' => function ($model) use ($ipFrontend) {
                    if ($model->portofolio) {

                        $baseUrl = Yii::getAlias('@frontend/web');
                        $newUrl = str_replace($baseUrl, "", $model->portofolio);
                        return Html::a(
                            'Lihat Portofolio',
                            $ipFrontend . $newUrl,
                            [
                                'title' => 'Go!',
                                'target' => '_blank'
                            ]
                        );
                    }
                }
            ],
        ],
    ]) ?>
    <?php
    if(count($dataTrainingUser) == 6 && $model->verif_kesehatan == NULL){
    ?>
    <center>
        <?= Html::a('Lolos', ['verif-data-kesehatan-success', 'id' => $model->id], [
            'class' => 'btn btn-success',
        ]) ?>
        <?= Html::a('Gagal', ['verif-data-kesehatan-gagal', 'id' => $model->id], [
            'class' => 'btn btn-danger',
        ]) ?>
    </center>
        <?php } ?>
</div>
