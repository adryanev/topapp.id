<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181745_detail_order extends Migration
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
            '{{%detail_order}}',
            [
                'id_detail_order'=> $this->primaryKey(11),
                'id_produk'=> $this->integer(11)->null()->defaultValue(null),
                'id_order'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('idx-detail_order','{{%detail_order}}',['id_detail_order'],false);
        $this->createIndex('fk-detail_order-id_order','{{%detail_order}}',['id_order'],false);
        $this->createIndex('fk-detail_order-id_produk','{{%detail_order}}',['id_produk'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('idx-detail_order', '{{%detail_order}}');
        $this->dropIndex('fk-detail_order-id_order', '{{%detail_order}}');
        $this->dropIndex('fk-detail_order-id_produk', '{{%detail_order}}');
        $this->dropTable('{{%detail_order}}');
    }
}
