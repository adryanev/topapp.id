<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181642_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_detail_produk_id_produk',
            '{{%detail_produk}}','id_produk',
            '{{%produk}}','id_produk',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_detail_produk_id_produk', '{{%detail_produk}}');
    }
}
