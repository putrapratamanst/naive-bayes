<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pilihan}}`.
 */
class m200628_153810_create_pilihan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pilihan}}', [
            'id' => $this->primaryKey(),
            'id_soal' => $this->integer(),
            'pilihan' => $this->string(),
            'keterangan' => $this->string(),
            'benar_salah' => $this->string(),
        ]);


        $this->insert('pilihan', [
            'id_soal' => "1",
            "pilihan" => "a",
            'keterangan'=> "Cemas",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "1",
            "pilihan" => "b",
            'keterangan'=> "Sedih",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "1",
            "pilihan" => "c",
            'keterangan'=> "Tidak bisa tidur",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "1",
            "pilihan" => "d",
            'keterangan'=> "Kenyataannya",
            "benar_salah"=>"0"
        ]);

        //psikotes 2
        $this->insert('pilihan', [
            'id_soal' => "2",
            "pilihan" => "a",
            'keterangan' => "Menumpuk",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "2",
            "pilihan" => "b",
            'keterangan' => "Kerdil",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "2",
            "pilihan" => "c",
            'keterangan' => "Macet",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "2",
            "pilihan" => "d",
            'keterangan' => "Susut",
            "benar_salah"=>"0"
        ]);

        //psikotes 3
        $this->insert('pilihan', [
            'id_soal' => "3",
            "pilihan" => "a",
            'keterangan' => "Makanan",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "3",
            "pilihan" => "b",
            'keterangan' => "Lintasan",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "3",
            "pilihan" => "c",
            'keterangan' => "Sepatu",
            "benar_salah"=>"0"
        ]);


        //psikotes 4
        $this->insert('pilihan', [
            'id_soal' => "4",
            "pilihan" => "a",
            'keterangan' => "6",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "4",
            "pilihan" => "b",
            'keterangan' => "8",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "4",
            "pilihan" => "c",
            'keterangan' => "4",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "4",
            "pilihan" => "d",
            'keterangan' => "2",
            "benar_salah"=>"0"
        ]);

        //psikotes 5
        $this->insert('pilihan', [
            'id_soal' => "5",
            "pilihan" => "a",
            'keterangan' => "Semua burung memiliki sayap",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "5",
            "pilihan" => "b",
            'keterangan' => "Semua ayam bisa terbang",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "5",
            "pilihan" => "c",
            'keterangan' => "Sementara ayam bisa terbang",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "5",
            "pilihan" => "d",
            'keterangan' => "Semua ayam termasuk jenis burung",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "5",
            "pilihan" => "e",
            'keterangan' => "Semua ayam bukan termasuk jenis burung",
            "benar_salah"=>"1"
        ]);

        //psikotes 6
        $this->insert('pilihan', [
            'id_soal' => "6",
            "pilihan" => "a",
            'keterangan' => "48",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "6",
            "pilihan" => "b",
            'keterangan' => "24",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "6",
            "pilihan" => "c",
            'keterangan' => "30",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "6",
            "pilihan" => "d",
            'keterangan' => "12",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "6",
            "pilihan" => "e",
            'keterangan' => "32",
            "benar_salah"=>"0"
        ]);

        //psikotes 7
        $this->insert('pilihan', [
            'id_soal' => "7",
            "pilihan" => "a",
            'keterangan' => "28 Tahun",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "7",
            "pilihan" => "b",
            'keterangan' => "26 Tahun",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "7",
            "pilihan" => "c",
            'keterangan' => "25 Tahun",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "7",
            "pilihan" => "d",
            'keterangan' => "21 Tahun",
            "benar_salah"=>"0"
        ]);

        //psikotes 8
        $this->insert('pilihan', [
            'id_soal' => "8",
            "pilihan" => "a",
            'keterangan' => "4,5,14",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "8",
            "pilihan" => "b",
            'keterangan' => "4,8,12",
            "benar_salah"=>"1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "8",
            "pilihan" => "c",
            'keterangan' => "4,8,14",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "8",
            "pilihan" => "d",
            'keterangan' => "5,7,9",
            "benar_salah"=>"0"
        ]);

        //psikotes 9
        $this->insert('pilihan', [
            'id_soal' => "9",
            "pilihan" => "a",
            'keterangan' => "Kuda tidak bersayap",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "9",
            "pilihan" => "b",
            'keterangan' => "Manusia tidak makan rumput",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "9",
            "pilihan" => "c",
            'keterangan' => "Manusia dan Kuda tidak bersayap dan tidak makan rumput",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "9 ",
            "pilihan" => "d",
            'keterangan' => "Manusia tidak makan Kuda",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "9 ",
            "pilihan" => "e",
            'keterangan' => "Tidak bisa ditarik kesimpulan",
            "benar_salah"=>"1"
        ]);

        //psikotes 10
        $this->insert('pilihan', [
            'id_soal' => "10",
            "pilihan" => "a",
            'keterangan' => "Hipotesis",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "10",
            "pilihan" => "b",
            'keterangan' => "Praduga",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "10",
            "pilihan" => "c",
            'keterangan' => "Thesis",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "10 ",
            "pilihan" => "d",
            'keterangan' => "Disertasi",
            "benar_salah"=>"0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "10 ",
            "pilihan" => "e",
            'keterangan' => "Buatan",
            "benar_salah"=>"1"
        ]);


        //IQ 11
        $this->insert('pilihan', [
            'id_soal' => "11",
            "pilihan" => "a",
            'keterangan' => "Posisi 1",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "11",
            "pilihan" => "b",
            'keterangan' => "Posisi 2",
            "benar_salah" => "1"
        ]);
        
        //IQ 12
        $this->insert('pilihan', [
            'id_soal' => "12",
            "pilihan" => "a",
            'keterangan' => "5000",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "12",
            "pilihan" => "b",
            'keterangan' => "4000",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "12",
            "pilihan" => "c",
            'keterangan' => "4100",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "12",
            "pilihan" => "d",
            'keterangan' => "3100",
            "benar_salah" => "0"
        ]);

        //IQ 13
        $this->insert('pilihan', [
            'id_soal' => "13",
            "pilihan" => "a",
            'keterangan' => "11 porsi",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "13",
            "pilihan" => "b",
            'keterangan' => "9 porsi",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "13",
            "pilihan" => "c",
            'keterangan' => "7 porsi",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "13",
            "pilihan" => "d",
            'keterangan' => "5 porsi",
            "benar_salah" => "0"
        ]);


        //IQ 14
        $this->insert('pilihan', [
            'id_soal' => "14",
            "pilihan" => "a",
            'keterangan' => "Firsthand",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "14",
            "pilihan" => "b",
            'keterangan' => "Pontificate",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "14",
            "pilihan" => "c",
            'keterangan' => "Federal",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "14",
            "pilihan" => "d",
            'keterangan' => "Shouts",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "14",
            "pilihan" => "e",
            'keterangan' => "Coupon",
            "benar_salah" => "0"
        ]);

        //IQ 15
        $this->insert('pilihan', [
            'id_soal' => "15",
            "pilihan" => "a",
            'keterangan' => "Dahlia",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "15",
            "pilihan" => "b",
            'keterangan' => "Melati",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "15",
            "pilihan" => "c",
            'keterangan' => "Sepatu",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "15",
            "pilihan" => "d",
            'keterangan' => "Mawar",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "15",
            "pilihan" => "e",
            'keterangan' => "Krisan",
            "benar_salah" => "0"
        ]);

        //IQ 16
        $this->insert('pilihan', [
            'id_soal' => "16",
            "pilihan" => "a",
            'keterangan' => "Plantant",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "16",
            "pilihan" => "b",
            'keterangan' => "Cargrace",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "16",
            "pilihan" => "c",
            'keterangan' => "Interpoint",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "16",
            "pilihan" => "d",
            'keterangan' => "Begbeger",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "16",
            "pilihan" => "e",
            'keterangan' => "Rediscovered",
            "benar_salah" => "0"
        ]);

        //IQ 17
        $this->insert('pilihan', [
            'id_soal' => "17",
            "pilihan" => "a",
            'keterangan' => "Rawam",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "17",
            "pilihan" => "b",
            'keterangan' => "Arukas",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "17",
            "pilihan" => "c",
            'keterangan' => "Italem",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "17",
            "pilihan" => "d",
            'keterangan' => "Pilut",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "17",
            "pilihan" => "e",
            'keterangan' => "Harem",
            "benar_salah" => "1"
        ]);

        //IQ 18
        $this->insert('pilihan', [
            'id_soal' => "18",
            "pilihan" => "a",
            'keterangan' => "281",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "18",
            "pilihan" => "b",
            'keterangan' => "923",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "18",
            "pilihan" => "c",
            'keterangan' => "361",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "18",
            "pilihan" => "d",
            'keterangan' => "435",
            "benar_salah" => "0"
        ]);

        //IQ 19
        $this->insert('pilihan', [
            'id_soal' => "19",
            "pilihan" => "a",
            'keterangan' => "Kader",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "19",
            "pilihan" => "b",
            'keterangan' => "Ember",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "19",
            "pilihan" => "c",
            'keterangan' => "Tempe",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "19 ",
            "pilihan" => "d",
            'keterangan' => "Estewe",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "19 ",
            "pilihan" => "e",
            'keterangan' => "Cejedewe",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "19 ",
            "pilihan" => "f",
            'keterangan' => "Helem",
            "benar_salah" => "1"
        ]);

        //IQ 20
        $this->insert('pilihan', [
            'id_soal' => "20",
            "pilihan" => "a",
            'keterangan' => "Katak",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "20",
            "pilihan" => "b",
            'keterangan' => "Kayak",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "20",
            "pilihan" => "c",
            'keterangan' => "Malam",
            "benar_salah" => "0"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "20 ",
            "pilihan" => "d",
            'keterangan' => "Bapak",
            "benar_salah" => "1"
        ]);
        $this->insert('pilihan', [
            'id_soal' => "20 ",
            "pilihan" => "e",
            'keterangan' => "Kapak",
            "benar_salah" => "0"
        ]);




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pilihan}}');
    }
}
