<?php

use yii\db\Migration;

/**
 * Class m200727_180658_update_responden_table
 */
class m200727_180658_update_responden_table extends Migration
{
    /** 
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('responden', 'is_sample', 'VARCHAR(10)');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200727_180658_update_responden_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200727_180658_update_responden_table cannot be reverted.\n";

        return false;
    }
    */
}
