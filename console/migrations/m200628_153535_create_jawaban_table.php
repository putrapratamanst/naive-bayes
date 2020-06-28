<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jawaban}}`.
 */
class m200628_153535_create_jawaban_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jawaban}}', [
            'id' => $this->primaryKey(),
            'id_responden' => $this->integer(),
            'id_soal' => $this->integer(),
            'type' => $this->integer(),
            'jawaban' => $this->string(),
            'benar_salah' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jawaban}}');
    }
}
