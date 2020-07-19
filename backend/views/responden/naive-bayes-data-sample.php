<?php

use yii\helpers\Html;
?>
<div class="x_panel">

    <div class="attributes-index">

        <h1>Data Sample</h1>
        <?= Html::a('Generate New Sample', ['process-data-sample'], ['class' => 'btn btn-success']) ?>

        <div id="w0" class="grid-view">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Responden</th>
                        <?php for ($i = 1; $i <= $jml_atribut; $i++) {
                            echo "<th>{$atribut[$i]}</th>";
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        //-- menampilkan data secara literal
                        foreach ($data as $id_responden => $dt_atribut) {
                            echo "<tr>
                            <td>{$no}</td>
                            <td>{$responden[$dt_atribut['responden']]}</td>";

                            for ($i = 1; $i <= $jml_atribut; $i++) {

                                echo "<td>{$parameter[$i][$dt_atribut[$i]]}</td>";
                            }

                            echo "</tr>";
                            $no++;
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
