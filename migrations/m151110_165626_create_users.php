<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_165626_create_users extends Migration
{
    /*
'id' => '100',
'username' => 'admin',
'password' => 'admin',
'authKey' => 'test100key',
'accessToken' => '100-token',
    public function up()
    {
        $this->createTable('user',array(
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'authKey' => Schema::TYPE_STRING . ' NOT NULL',
            'accessToken' => Schema::TYPE_STRING . ' NOT NULL',
        ));
    }
    */

    public function safeUp()
    {
        $this->createTable('user',array(
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'authKey' => Schema::TYPE_STRING . ' NOT NULL',
            'accessToken' => Schema::TYPE_STRING . ' NOT NULL',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('user');

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
