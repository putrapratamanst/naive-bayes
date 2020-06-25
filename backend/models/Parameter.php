<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "parameter".
 *
 * @property int $id
 * @property int|null $id_attribute
 * @property int|null $value
 * @property string|null $parameter_name
 */
class Parameter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parameter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_attribute', 'value'], 'integer'],
            [['parameter_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_attribute' => 'Id Attribute',
            'value' => 'Value',
            'parameter_name' => 'Parameter Name',
        ];
    }
}
