<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "soal".
 *
 * @property int $id
 * @property string|null $pertanyaan
 * @property int|null $type
 */
class Soal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'soal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pertanyaan'], 'string'],
            [['type'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
            'type' => 'Type',
        ];
    }
}
