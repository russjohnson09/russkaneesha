<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_174314_create_guests extends Migration
{
    public function safeUp()
    {
        $this->createTable('guest',array(
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING . ' NOT NULL',
            'last_name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
        ));
    }

    public function safeDown()
    {
        $this->dropTable('guest');

        return false;
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
