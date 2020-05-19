<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181549_user extends Migration
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
            '{{%user}}',
            [
                'id'=> $this->primaryKey(11),
                'username'=> $this->string(255)->notNull(),
                'email'=> $this->string(255)->notNull(),
                'nama'=> $this->string(255)->notNull(),
                'password_hash'=> $this->string(255)->notNull(),
                'password_reset_token'=> $this->string(255)->null()->defaultValue(null),
                'auth_key'=> $this->string(32)->notNull(),
                'avatar'=> $this->string(255)->null()->defaultValue(null),
                'tempat_lahir'=> $this->string(255)->null()->defaultValue(null),
                'tanggal_lahir'=> $this->date()->null()->defaultValue(null),
                'alamat'=> $this->string(255)->null()->defaultValue(null),
                'job'=> $this->string(64)->null()->defaultValue(null),
                'instansi'=> $this->string(255)->null()->defaultValue(null),
                'status'=> $this->smallInteger(6)->notNull()->defaultValue(10),
                'created_at'=> $this->integer(),
                'updated_at'=> $this->integer(),
            ],$tableOptions
        );
        $this->createIndex('username','{{%user}}',['username'],true);
        $this->createIndex('email','{{%user}}',['email'],true);
        $this->createIndex('password_reset_token','{{%user}}',['password_reset_token'],true);
        $this->createIndex('idx-user','{{%user}}',['username','nama','email'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('username', '{{%user}}');
        $this->dropIndex('email', '{{%user}}');
        $this->dropIndex('password_reset_token', '{{%user}}');
        $this->dropIndex('idx-user', '{{%user}}');
        $this->dropTable('{{%user}}');
    }
}
