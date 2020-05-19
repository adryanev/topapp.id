<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181526_team extends Migration
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
            '{{%team}}',
            [
                'id'=> $this->primaryKey(11),
                'nama_lengkap'=> $this->string(50)->null()->defaultValue(null),
                'jabatan'=> $this->string(255)->null()->defaultValue(null),
                'foto'=> $this->string(255)->null()->defaultValue(null),
                'created_at'=> $this->integer(11)->null()->defaultValue(null),
                'updated_at'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%team}}');
    }
}
