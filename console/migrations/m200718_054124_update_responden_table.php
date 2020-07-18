<?php

use yii\db\Migration;

/**
 * Class m200718_054124_update_responden_table
 */
class m200718_054124_update_responden_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('responden', 'verif_data_pelamar', 'VARCHAR(1)');
        $this->addColumn('responden', 'verif_wawancara', 'VARCHAR(1)');
        $this->addColumn('responden', 'verif_kesehatan', 'VARCHAR(1)');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200718_054124_update_responden_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200718_054124_update_responden_table cannot be reverted.\n";

        return false;
    }
    */
}
