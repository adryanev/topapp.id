<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181509_tag extends Migration
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
            '{{%tag}}',
            [
                'id'=> $this->primaryKey(11),
                'nama_tag'=> $this->string(255)->null()->defaultValue(null),
                'count'=> $this->integer(11)->defaultValue(0),
                'created_at'=> $this->integer(),
                'updated_at'=> $this->integer(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%tag}}');
    }
}
