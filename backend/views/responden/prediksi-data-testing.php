<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;


$provider = new ArrayDataProvider([
    'allModels' => $countFrequensi,
]);
$total = $countFrequensi[0]['count'] + $countFrequensi[1]['count'];
$totalLulus = $countFrequensi[0]['count'] / 100;
$totalTidakLulus = $countFrequensi[1]['count'] / 100;
$totalSummaryP = round($total / $total * 100) . "%";
?>
<div class="col-md-12">
    <div class="x_panel">
        <h1>Prediksi Data Testing</h1>
        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h4 class="panel-title">LIST DATA SAMPLE</h4>
                </a>
                <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">

                    <div id="w0" class="grid-view">
                        <table class="table table-striped table-bordered">
                            <thead>
                                </tr>
                                <th>NAMA RESPONDEN SAMPLE</th>
                                <th>PREDIKSI AWAL</th>
                                <th>LULUS</th>
                                <th>TIDAK LULUS</th>
                                <th>PREDIKSI KLASIFIKASI</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $confusionTidakLolos = 0;
                                $confusionLolos = 0;
                                $confusionTidakLolosdanLolos =0;
                                $confusionLolosdanTidakLolos =0;


                                $awalTidakLolos = false;
                                $klarifikasiTidakLolos = false;
                                $awalLolos = false;
                                $klarifikasiLolos = false;
                                foreach ($dataResultSample as $keydataResultSample => $valuedataResultSample) {
                                    
                                    ?>
                                    <tr>
                                        <td><?= $valuedataResultSample['nama_responden'] ?></td>

                                        <?php
                                        switch (true) {
                                            case $valuedataResultSample[7] >= 14:
                                                echo "<td style='color:blue'><b><i>Lulus</i></b></td>";
                                                $awalLolos = true;
                                                $awalTidakLolos = false;

                                                break;
                                            case $valuedataResultSample[7] < 14:
                                                echo "<td style='color:red'><b><i> Tidak Lulus</i></b></td>";
                                                $awalTidakLolos = true;
                                                $awalLolos = false;

                                                break;

                                            default:
                                                # code...
                                                break;
                                        } ?>

                                        <?php
                                        $lulus = 1;
                                        $tidaklulus = 1;
                                        for ($i = 1; $i <= $jml_atribut; $i++) {
                                            foreach ($parameter[$i] as $nilai => $param) {
                                                if ($valuedataResultSample[$i] == $nilai) {
                                                    foreach ($data_by_attribute[$attribute[$i]][$param] as $key => $value) {
                                                        if ($key == "lulus") {
                                                            $lulus *= $value['persen'];
                                                        } else {
                                                            $tidaklulus  *= $value['persen'];
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        echo "<td>" . number_format($lulus * $totalLulus * 100, 2)  .  "%</td>";
                                        echo "<td>" . number_format($tidaklulus * $totalTidakLulus * 100, 2) . "%</td>";

                                        switch (true) {
                                            case $lulus > $tidaklulus:
                                                echo "<td style='color:blue'><b><i>Lulus</i></b></td>";
                                                $klarifikasiLolos = true;
                                                $klarifikasiTidakLolos = false;

                                                break;

                                            default:
                                                echo "<td style='color:red'><b><i> Tidak Lulus</i></b></td>";
                                                $klarifikasiTidakLolos = true;
                                                $klarifikasiLolos = false;

                                                break;
                                        }
                                     


                                        if (($awalTidakLolos === true) && ($klarifikasiTidakLolos === true)) {
                                            $confusionTidakLolos++;
                                        }
                                        if (($klarifikasiLolos === true) && ($awalLolos === true)) {
                                            $confusionLolos++;
                                        } 
                                        if (($awalLolos === true) && ($klarifikasiTidakLolos === true)) {
                                            $confusionLolosdanTidakLolos++;
                                        } 
                                        if (($klarifikasiLolos === true) && ($awalTidakLolos === true)) {
                                            $confusionTidakLolosdanLolos++;
                                        } 
                                        ?>
                                    </tr>
                                <?php } ;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br>
            <hr>
            <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h4 class="panel-title">CLASS PREDICTION</h4>
                </a>

                <div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingTwo">

                    <div id="w0" class="grid-view">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th rowspan="2">PREDIKSI AWAL</th>
                                    <th colspan="3" style="text-align:center">PREDIKSI KLASIFIKASI</th>
                                </tr>
                                <tr>
                                    <th>LULUS</th>
                                    <th>TIDAK LULUS</th>
                                </tr>
                                <tr>
                                    <td><b>LULUS</b></td>
                                    <td><?= $confusionLolos?></td>
                                    <td><?= $confusionLolosdanTidakLolos?></td>
                                </tr>
                                <tr>
                                    <td><b>TIDAK LULUS</b></td>
                                    <td><?= $confusionTidakLolosdanLolos;?></td>
                                    <td><?= $confusionTidakLolos;?></td>
                                </tr>
                            </tbody>
                        </table>
                        <h1>ACCURACY: <?= number_format(($confusionLolos + $confusionTidakLolos) / ($confusionLolos+ $confusionLolosdanTidakLolos+ $confusionTidakLolosdanLolos+ $confusionTidakLolos) * 100, 2);?> %</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
