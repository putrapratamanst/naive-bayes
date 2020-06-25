<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%soal}}`.
 */
class m200625_185447_create_soal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%soal}}', [
            'id' => $this->primaryKey(),
            'pertanyaan' => $this->text(),
            'type' => $this->integer(),// 1 = psikotes, 2 = iq
        ]);

        $this->insert('soal', [
            'pertanyaan' => "Insomnia =…",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Mobil – Bensin = Pelari - …",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "1 24 20 16 = …",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Bongsor =…",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Semua jenis burung bisa terbang. Semua ayam memiliki sayap.",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "2 3 6 10 20 24 = …",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Aji adalah kakak Habib, 4 tahun lebi tua. Bintan adalah kakak Aji dan berbeda 3 tahun. Berapakah usia Bintan jika saat ini Habib baru saja merayakan ulang tahun yang ke-21 ?",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Perhatikan sederet bilangan berikut. 4,5,6,7,8,9,10,11,12,13, dan 14. Dari bilangan tersebut, yang tidak dapat dibagi 4 adalah,  kecuali…",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Semua Manusia tidak bersayap. Semua Kuda makan rumput",
            "type" => "1",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Protesis = …",
            "type" => "1",
        ]);


        //IQ
        $this->insert("soal", [
            "pertanyaan" => "Anda ikut berlomba. Anda menyalip orang di posisi nomor dua. Sekarang posisi anda nomor berapa?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Ambil 1000 dan tambahkan 40 padanya. Sekarang tambahkan 1000 lagi. Sekarang tambahkan 30! Tambahkan 1000 lagi. Sekarang tambahkan 20. Sekarang tambahkan 1000. Sekarang tambahkan 10 . Berapa totalnya?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Seorang kakek, seorang nenek, 2 orang ayah, 2 orang ibu, 3 anak laki-laki dan 2 anak perempuan pergi ke restoran. Berapa jumlah makanan yang harus dibeli agar setiap orang mendapat tepat 1 jatah?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Manakah yang kurang sesuai dari daftar kata-kata ini? (tidak perlu pengetahuan bahasa Inggris)",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Manakah yang kurang sesuai dari daftar kata-kata ini?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Kata manakah yang tak sesuai dengan yang lain? (tak diperlukan pengetahuan bahasa Inggris).",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Manakah dari susunan huruf yang membentuk kata berikut di bawah ini yang tak sesuai?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Manakah dari bilangan-bilangan berikut ini yang sesuai dengan urutan di bawah ini?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Manakah dari bilangan-bilangan berikut ini yang sesuai dengan urutan di bawah ini?
_ _ _ , 281, 435, 634, 923, 573, 312, 421, 233, 315, 361, _ _ _",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Terdapat satu kata di bawah ini yang tidak mempunyai persamaan, yang manakah?",
            "type" => "2",
        ]);

        $this->insert("soal", [
            "pertanyaan" => "Manakah dari daftar kata-kata di bawah ini yang salah?",
            "type" => "2",
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%soal}}');
    }
}
