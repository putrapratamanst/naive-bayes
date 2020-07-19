<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;


$provider = new ArrayDataProvider([
    'allModels' => $countFrequensi,
]);
$total = $countFrequensi[0]['count'] + $countFrequensi[1]['count'];
$totalLulus = $countFrequensi[0]['count'];
$totalTidakLulus = $countFrequensi[1]['count'];
$totalSummaryP = round($total / $total * 100) . "%";
?>
<div class="col-md-12">
    <div class="x_panel">

        <h1>P(Lulus/Tidak Lulus) </h1>
        <?= GridView::widget([
            'dataProvider' => $provider,
            'summary' => "",
            'showFooter' => true,

            'columns' => [
                'status',
                [
                    'attribute' => 'count',
                    'label' => '%',
                    'value' => function ($model) use ($total) {
                        return round($model['count'] / $total * 100) . "%";
                    },
                    'footer' => $totalSummaryP

                ],
            ],
        ]); ?>
        <hr>
        <?php for ($i = 1; $i <= $jml_atribut; $i++) {
        ?> <h1>P(<?= $attribute[$i] ?> = ... </h1>

            <div id="w0" class="grid-view">
                <table class="table table-striped table-bordered">
                    <thead>
                        <?php echo "<tr>
                    <th style='text-align:center; width: 17%;'>
                        {$attribute[$i]}
                    </th>
                    <th>LULUS</th>
                    <th>TIDAK LULUS</th>";
                        echo "</tr>";
                        ?>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($parameter[$i] as $nilai => $param) {
                            echo"<td>{$param}</td>";
                            foreach ($data_by_attribute[$attribute[$i]][$param] as $key => $value) {
                                $persen = 0;
                                if($key == "lulus"){
                                    $persen = round($value['jumlah'] / $totalLulus * 100);
                                } else {
                                    $persen = round($value['jumlah'] / $totalTidakLulus * 100);
                                }
                                echo "<td>";
                                echo "Jumlah: " . $value['jumlah'];
                                echo " | Persentase: " . $persen;
                                echo "%</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                        <tr>
                            <td></td>
                            <td>Total: 100%</td>
                            <td>Total: 100%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <hr>
        <?php } ?>
    </div>
</div>
