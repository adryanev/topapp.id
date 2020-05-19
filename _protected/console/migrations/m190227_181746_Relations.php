<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181746_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_detail_order_id_order',
            '{{%detail_order}}','id_order',
            '{{%order}}','id_order',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_detail_order_id_produk',
            '{{%detail_order}}','id_produk',
            '{{%produk}}','id_produk',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_detail_order_id_order', '{{%detail_order}}');
        $this->dropForeignKey('fk_detail_order_id_produk', '{{%detail_order}}');
    }
}
