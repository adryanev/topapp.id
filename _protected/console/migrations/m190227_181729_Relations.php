<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181729_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_order_id_user',
            '{{%order}}','id_user',
            '{{%user}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_order_id_user', '{{%order}}');
    }
}
