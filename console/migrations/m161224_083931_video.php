<?php

use yii\db\Migration;

class m161224_083931_video extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if($this->db->driverName === "mysql")
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB';
        }

        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'topic_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()->unique(),
            'preview_image' => $this->integer()->notNull(),
            'path' => $this->string()->notNull()->unique(),
            'description' => $this->string(),

            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('video');
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
