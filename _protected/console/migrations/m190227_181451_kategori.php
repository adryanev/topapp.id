<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181451_kategori extends Migration
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
            '{{%kategori}}',
            [
                'id_kategori'=> $this->primaryKey(11),
                'nama_kategori'=> $this->string(255)->notNull(),
                'created_at'=>$this->integer(),
                'updated_at'=> $this->integer()
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%kategori}}');
    }
}
