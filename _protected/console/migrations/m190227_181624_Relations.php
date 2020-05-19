<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181624_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_produk_added_by',
            '{{%produk}}','added_by',
            '{{%admin}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_produk_kategori_produk',
            '{{%produk}}','kategori_produk',
            '{{%kategori}}','id_kategori',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_produk_added_by', '{{%produk}}');
        $this->dropForeignKey('fk_produk_kategori_produk', '{{%produk}}');
    }
}
