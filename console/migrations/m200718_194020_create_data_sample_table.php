<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%data_sample}}`.
 */
class m200718_194020_create_data_sample_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%data_sample}}', [
            'id' => $this->primaryKey(),
            'id_responden' => $this->integer(),
            'id_attribute' => $this->integer(),
            'id_parameter' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%data_sample}}');
    }
}
