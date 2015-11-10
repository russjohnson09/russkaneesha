<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_221542_add_contact_info extends Migration
{
    public function safeUp()
    {
        $this->addColumn('guest','phone',Schema::TYPE_STRING);
        $this->addColumn('guest','email',Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m151110_221542_add_contact_info cannot be reverted.\n";

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
