<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181601_profil extends Migration
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
            '{{%profil}}',
            [
                'id_profil'=> $this->primaryKey(11),
                'foto_profil'=> $this->string(255)->notNull(),
                'isi_profil'=> $this->text()->notNull(),
                'nama_app'=> $this->string(100)->notNull(),
                'alamat'=> $this->text()->notNull(),
                'email'=> $this->string(255)->notNull(),
                'hp'=> $this->string(15)->notNull(),
                'created_at'=> $this->integer(),
                'updated_at'=> $this->integer(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%profil}}');
    }
}
