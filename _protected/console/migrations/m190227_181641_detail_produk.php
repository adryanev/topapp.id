<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181641_detail_produk extends Migration
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
            '{{%detail_produk}}',
            [
                'id_detail_produk'=> $this->primaryKey(11),
                'id_produk'=> $this->integer(11)->null()->defaultValue(null),
                'gambar'=> $this->string(255)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('idx-detail_produk','{{%detail_produk}}',['id_produk','gambar'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('idx-detail_produk', '{{%detail_produk}}');
        $this->dropTable('{{%detail_produk}}');
    }
}
