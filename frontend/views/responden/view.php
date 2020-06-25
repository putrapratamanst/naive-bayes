<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Responden */

$this->title = $model->nama;
// $this->params['breadcrumbs'][] = ['label' => 'Respondens', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="responden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah Data Pelamar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Form Lamaran', ['/data-training/view', 'id' => $model->id], ['class' => 'btn btn-success pull-right']) ?>
         <!-- Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])  -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],

        'attributes' => [
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
                'value' => function ($model) {
                    if($model->cv){

                        $baseUrl = Yii::getAlias('@frontend/web');
                        $newUrl = str_replace($baseUrl, "", $model->cv);
                        return Html::a('Lihat CV', $newUrl,
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
                'value' => function ($model) {
                    if ($model->ijazah) {

                        $baseUrl = Yii::getAlias('@frontend/web');
                        $newUrl = str_replace($baseUrl, "", $model->ijazah);
                        return Html::a('Lihat Ijazah', $newUrl,
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
                'value' => function ($model) {
                    if ($model->portofolio) {

                        $baseUrl = Yii::getAlias('@frontend/web');
                        $newUrl = str_replace($baseUrl, "", $model->portofolio);
                        return Html::a('Lihat Portofolio', $newUrl,
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

</div>
