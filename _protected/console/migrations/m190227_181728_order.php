<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181728_order extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%order}}',
            [
                'id_order'=> $this->primaryKey(11),
                'id_user'=> $this->integer(11)->null()->defaultValue(null),
                'date_order'=> $this->integer(),
                'total'=> $this->string(255)->notNull(),
                'status'=> "enum('true', 'false') NOT NULL",
            ],$tableOptions
        );
        $this->createIndex('idx-order','{{%order}}',['id_order','date_order'],false);
        $this->createIndex('fk-order-id','{{%order}}',['id_user'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('idx-order', '{{%order}}');
        $this->dropIndex('fk-order-id', '{{%order}}');
        $this->dropTable('{{%order}}');
    }
}
