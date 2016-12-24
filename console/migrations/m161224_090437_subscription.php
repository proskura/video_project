<?php

use yii\db\Migration;

class m161224_090437_subscription extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this->db->driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB';
        }

        $this->createTable('subscription', [
            'user_id' => $this->integer()->notNull(),
            'section_id' => $this->integer()->notNull(),
            'PRIMARY KEY(`user_id`, `section_id`)',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('subscription');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
