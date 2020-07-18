<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataTraining */

$this->title = 'Data Lamaran:' . $nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Trainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-training-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['/responden/view-fisik', 'id' => $id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'attribute_name'
            ],
            [
                'attribute' => 'parameter_name',
                'format'    => 'raw',
                'value'     =>  function ($model) use ($umur) {

                    if ($model['parameter_name'] != NULL) {
                        return $model['parameter_name'];
                    } elseif ($model['attribute_name'] == "Umur") {

                        $birthDate = new DateTime($umur);
                        $today = new DateTime("today");
                        if ($birthDate > $today) {
                            return "-";
                        }
                        $y = $today->diff($birthDate)->y;
                        $m = $today->diff($birthDate)->m;
                        $d = $today->diff($birthDate)->d;
                        return $y . " tahun " . $m . " bulan " . $d . " hari";
                    } else {
                        $urlCreate = "";

                        switch ($model['id_attribute']) {
                            case '1':
                                $urlCreate = "create-pendidikan";
                                break;
                            case '2':
                                $urlCreate = "create-ipk";
                                break;
                            case '3':
                                $urlCreate = "create-pengalaman-kerja";
                                break;
                            case '4':
                                $urlCreate = "create-umur";
                                break;
                            case '5':
                                // $urlCreate = "create-psikotes";
                                $urlCreate = "create-psikotes-baru";
                                break;
                            case '6':
                                // $urlCreate = "create-iq";
                                $urlCreate = "create-iq-baru";
                                break;

                            default:
                                # code...
                                break;
                        }
                        return Html::a("Silahkan Input Data {$model['attribute_name']}", [$urlCreate, 'id' => $model['id_responden']]);
                    }
                }
            ],
        ],
    ]); ?>
</div>
