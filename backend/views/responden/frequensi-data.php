<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;


$provider = new ArrayDataProvider([
    'allModels' => $countFrequensi,
]);
?>
<h1>Frequensi Data </h1>
<?= GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'status',
        'count',

    ],
]); ?>
<hr>
<?php for ($i = 2; $i <= $jml_atribut - 1; $i++) {
?> <h1>Jumlah Data Atribut <?= $attribute[$i] ?> </h1>

    <div id="w0" class="grid-view">
        <table class="table table-striped table-bordered">
            <thead>
                <?php echo "<tr>
                    <th rowspan='2' style='width: 17%;'>STATUS KELAYAKAN</th>
                    <th colspan='3' style='text-align:center'>
                        {$attribute[$i]}
                    </th>
                </tr>
                <tr>";
                foreach ($parameter[$i] as $nilai => $param) {
                    echo "<th>{$param}</th>";
                }
                echo "</tr>";
                ?>
            </thead>
            <tbody>
                <tr>
                    <td>Layak</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Tidak Layak</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <hr>
<?php } ?>
<?php
//-- menampilkan tabel frekuensi/jumlah data tiap atribut
for ($i = 2; $i <= $jml_atribut - 1; $i++) {
    echo "<table border='1'>";
    //-- caption tabel utk masing-masing atribut
    echo "<caption>TABEL " . ($i + 1) . " : Jumlah Data Atribut:  {$attribute[$i]}</caption>";
    echo "<tr><th rowspan='2'>STATUS KELAYAKAN</th><th colspan='3'>
    {$attribute[$i]}
    </th></tr><tr>";
    //-- item nilai literal tiap atribut
    foreach ($parameter[$i] as $nilai => $param) {
        echo "<th>{$param}</th>";
    }
    echo "</tr>";
    //-- iterasi utk tiap nilai kelas
    foreach ($parameter[1] as $n => $p) {
        echo "<tr><td>{$p}</td>";
        //-- iterasi jumlah data/freq tiap nilai atribut
        // for ($j = 0; $j <= 4; $j++) {
        //     echo "<td>{$freq[$i][$j][$n]}</td>";
        // }
        echo "</tr>";
    }
    echo "</table>";
}
?>
