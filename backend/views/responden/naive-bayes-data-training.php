<div class="x_panel">

    <div class="attributes-index">

        <h1>Data Training</h1>

        <p>
            <!-- Html::a('Create Attributes', ['create'], ['class' => 'btn btn-success']) -->
        </p>


        <div id="w0" class="grid-view">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Responden</th>
                        <?php for ($i = 1; $i <= $jml_atribut; $i++) {
                            echo "<th>{$atribut[$i]}</th>";
                        } ?>

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
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
