<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jawaban".
 *
 * @property int $id
 * @property int|null $id_responden
 * @property int|null $id_soal
 * @property int|null $type
 * @property string|null $jawaban
 * @property string|null $benar_salah
 */
class Jawaban extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jawaban';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_responden', 'id_soal', 'type'], 'integer'],
            [['jawaban', 'benar_salah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_responden' => 'Id Responden',
            'id_soal' => 'Id Soal',
            'type' => 'Type',
            'jawaban' => 'Jawaban',
            'benar_salah' => 'Benar Salah',
        ];
    }
}
