<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%responden}}`.
 */
class m200623_154419_create_responden_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%responden}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(255),
            'jenis_kelamin' => $this->string(255),
            'cv' => $this->string(255),
            'portofolio' => $this->string(255),
            'no_telepon' => $this->string(255),
            'email' => $this->string(255),
            'tempat_lahir' => $this->string(255),
            'tanggal_lahir' => $this->string(255),
            'ijazah' => $this->string(255),
        ]);


        // $this->insert('responden', [
        //     'nama' => 'Abdillah zakarya',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Abi Abdurahman Syarif',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ADINDA DWI APRILIANTI ASLI',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Agum Gumelar',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'AGUS DUNAS NUGRAHA',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Agus Laksana',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Ahmad Dahlan',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ALSHINTA SABIAN DWIEARLIZA BASIT',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Andika wibawa putra',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ANI ANDINI',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Annisa Aulia',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ANYA DANIA NOVITA LUMENTUT',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Arif Tri Widodo',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Arsika Marwah D. Tantja',
        //     'jenis_kelamin' => 'P',
        // ]);


        // $this->insert('responden', [
        //     'nama' => 'AYU AGUSTINA',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'AZMI PARID ALKAPA',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Bagasta Nispuana',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Bagus Mayan Permana',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Bintang Prahadi',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Budi Nurhidayat',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Cesar Hermawan Casthilo',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Clarence Andika Sinulingga',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'David Rivaldo Iek',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'DEDE ANGGI JULIA PRATAMA',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Dewi Nafisah',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'DHIFA MAULA RIZKY',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Diah Putri Lestari',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Eka Putri Shellani',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ERA NURAINI',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Ervian Alan Pratama W',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Farhan ega hermawan',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Fathur Rismansyah',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Feby Nur Istiqomah',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Frass setia dika N',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Fret Deni Iek',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Galih Gustiana Nurdin',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Hilmi Hasbiya Zahrani Waltz',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Hudaifah Priohastono',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'HUSNIA',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Iis Sofiatuzzulfa',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ILHAM DEAN ABDILLAH',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'ILHAM KADLAWI',
        //     'jenis_kelamin' => 'L',
        // ]);
        
        // $this->insert('responden', [
        //     'nama' => 'Jackson Toisuta',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Jumiana',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Kartiko Damarjati',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Khofip putra nadillah',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Kridhan pandego',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Kurniawan sandi',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Lintang Prameswari nur adi',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'LUKI SETIAWAN',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Lutfi Iskandar',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Malrtania Prasasty',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'MEI IBNU ARIFIN',
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Mohamad Basit',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => 'Mohamad hohari',
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "MU'AMAR HABIYYUSU SHAPUTRA",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muh.Basyir.A Palaguna",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhamad Faisal",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhamad Fikri",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhamad Rifyal Fauzan",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhamad Yusri Muhtadi",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhammad Alviansyah",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhammad Salman Alparisi",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "MUHAMMAD SYAMIL HAMAMI",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Muhammad Teezar RobiAddin",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Nadila Azahra",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Naufal Hammad Riyadi",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Nida Daniala",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Niendi Devie Ottavia",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Nona Ibrahim Suliling",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "NOVIYANI",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Nur Ridwan",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "NURUL WINDA",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "OKI AGUS HERMANTO",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "OTTO ANDRIAS ARU",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "PAJAR GUNAWAN",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "PANDU EKO WIDODO",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Piawati",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Pitri",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Rafi Raditya",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "RAHMAT RAMADHAN",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Ramadhani Dwi Kurniawan Putra",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Ramdan adriansah",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "RAMDANI",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Rangga Setiadi",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "RANI RAMDANIYAH",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "REGINA NURUL KHOERIYAH JAMIL",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Rena Junia",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Rendy Sundrajaya",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Resa Andani",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Resva Ayu Juliyani",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Rian aditya swandaru",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "RISKA AGUSTINA RAHAYU",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Rosmila Wati",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Sadijah Nur Hasanah",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Safna difayana",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Sahrul ds",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Salman Mantana",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Sartika Lediawati",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Satya Teguh Aditya",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Shalsa Nur Fadhilah",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Shyfa Zahrany",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Sindy kusuma",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Siti Aisyah",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Sultan fakih",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Susi",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Syamsul Huda",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Syarif",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Syarif Rifa",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Trennandy Alansyah",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Triyuwandi Wandira",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Udi Ramadhani",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yanuar Fatli Makmur Maraja",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yasmin putri trianu",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yuli Sevtianingsih",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yuliani Amelia Pratiwi",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yunita Andriani",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yusa Raihan Dhani",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Yusi Fitriyani",
        //     'jenis_kelamin' => 'P',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "YUSUF IRFAN PURNAMA",
        //     'jenis_kelamin' => 'L',
        // ]);

        // $this->insert('responden', [
        //     'nama' => "Zulfikar Rakasiwi",
        //     'jenis_kelamin' => 'L',
        // ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%responden}}');
    }
}
