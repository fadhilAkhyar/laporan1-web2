<?php

use yii\db\Migration;

/**
 * Class m230530_113654_mahasiswa129
 */
class m230530_113654_mahasiswa129 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa129}}', [
            'id129' => $this->primarykey(),
            'nim129' => $this->string(255)->notNull()->unique(),
            'nama129' => $this->string(255)->notNull(),
            'kelas129' => $this->string(255)->notNull(),
            'status129' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_113654_mahasiswa129 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_113654_mahasiswa129 cannot be reverted.\n";

        return false;
    }
    */
}
