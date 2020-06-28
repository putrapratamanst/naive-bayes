<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pilihan".
 *
 * @property int $id
 * @property int|null $id_soal
 * @property string|null $pilihan
 * @property string|null $keterangan
 * @property string|null $benar_salah
 */
class Pilihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pilihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_soal'], 'integer'],
            [['pilihan', 'keterangan', 'benar_salah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_soal' => 'Id Soal',
            'pilihan' => 'Pilihan',
            'keterangan' => 'Keterangan',
            'benar_salah' => 'Benar Salah',
        ];
    }
}
