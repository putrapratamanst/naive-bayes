<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%data_training}}`.
 */
class m200623_154157_create_data_training_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%data_training}}', [
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
        $this->dropTable('{{%data_training}}');
    }
}
