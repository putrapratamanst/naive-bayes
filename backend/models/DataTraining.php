<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data_training".
 *
 * @property int $id
 * @property int|null $id_responden
 * @property int|null $id_attribute
 * @property int|null $id_parameter
 */
class DataTraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_responden', 'id_attribute', 'id_parameter'], 'integer'],
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
            'id_attribute' => 'Id Attribute',
            'id_parameter' => 'Parameter',
        ];
    }

    public function getParameterRelation()
    {
        return $this->hasOne(Parameter::className(), ['id' => 'id_parameter']);
    }

    public function getResponden()
    {
        return $this->hasMany(Responden::className(), ['id' => 'id_responden']);
    }
}
