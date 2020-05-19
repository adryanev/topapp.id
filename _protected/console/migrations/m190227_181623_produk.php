<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181623_produk extends Migration
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
            '{{%produk}}',
            [
                'id_produk'=> $this->primaryKey(11),
                'nama_produk'=> $this->string(255)->notNull(),
                'kategori_produk'=> $this->integer(11)->null()->defaultValue(null),
                'developer'=> $this->string(255)->notNull(),
                'deskripsi_produk'=> $this->text()->null()->defaultValue(null),
                'fitur_produk'=> $this->text()->null()->defaultValue(null),
                'spesifikasi'=> $this->text()->null()->defaultValue(null),
                'harga'=> $this->integer(11)->notNull()->defaultValue(0),
                'video'=> $this->string(255)->null()->defaultValue(null),
                'source_code'=> $this->string(255)->notNull(),
                'demo'=> $this->string(255)->null()->defaultValue(null),
                'manual_book'=> $this->string(255)->null()->defaultValue(null),
                'rancangan'=> $this->string(255)->null()->defaultValue(null),
                'status'=> $this->smallInteger(6)->notNull()->defaultValue(10),
                'added_by'=> $this->integer(11)->null()->defaultValue(null),
                'created_at'=> $this->integer(),
                'updated_at'=> $this->integer(),
            ],$tableOptions
        );
        $this->createIndex('idx-produk','{{%produk}}',['nama_produk','developer','harga'],false);
        $this->createIndex('fk-produk-id_admin','{{%produk}}',['added_by'],false);
        $this->createIndex('fk-produk-id_kategori','{{%produk}}',['kategori_produk'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('idx-produk', '{{%produk}}');
        $this->dropIndex('fk-produk-id_admin', '{{%produk}}');
        $this->dropIndex('fk-produk-id_kategori', '{{%produk}}');
        $this->dropTable('{{%produk}}');
    }
}
