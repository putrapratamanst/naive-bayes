<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "responden".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $jenis_kelamin
 */
class Responden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'responden';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kelamin', 'verif_data_pelamar', 'verif_wawancara', 'verif_kesehatan'], 'string', 'max' => 255],
            [['nama', 'jenis_kelamin'], 'required'],
            [['is_sample'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }

    public function getResponden()
    {
        return $this->belongsTo(Responden::className(), ['id' => 'id_responden']);
    }

}
