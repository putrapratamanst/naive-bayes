<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "responden".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $jenis_kelamin
 * @property string|null $cv
 * @property string|null $portofolio
 * @property string|null $no_telepon
 * @property string|null $email
 * @property string|null $ttl
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
            [['nama', 'jenis_kelamin', 'cv', 'portofolio', 'no_telepon', 'email', 'tempat_lahir',  'tanggal_lahir', 'ijazah'], 'string', 'max' => 255],
            [['nama', 'email'], 'required'],
            [['nama','no_telepon', 'email', 'ttl','jenis_kelamin'], 'required', 'on' => 'update'],
            [['cv', 'ijazah', 'portofolio'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, pdf', 'on' => 'update'],
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
            'cv' => 'Curricullum Vitae',
            'portofolio' => 'Portofolio',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
        ];
    }
}
