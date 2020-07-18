<div class="x_panel">

    <div class="attributes-index">

        <h1>Data Training</h1>

        <div id="w0" class="grid-view">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Responden</th>
                        <?php for ($i = 1; $i <= $jml_atribut; $i++) {
                            echo "<th>{$atribut[$i]}</th>";
                        } ?>
                        <th>Prediksi Kasar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                        //-- menampilkan data secara literal
                        foreach ($data as $id_responden => $dt_atribut) {
                            echo "<tr><td>{$responden[$id_responden]}</td>";

                            for ($i = 1; $i <= $jml_atribut; $i++) {

                                echo "<td>{$parameter[$i][$dt_atribut[$i]]}</td>";
                            }
                            
                            switch (true) {
                                case $dt_atribut[7] >= 14:
                                    echo "<td style='color:blue'><b><i>Layak</i></b></td>";
                                    break;
                                case $dt_atribut[7] < 14:
                                    echo "<td style='color:red'><b><i> Tidak Layak</i></b></td>";
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
