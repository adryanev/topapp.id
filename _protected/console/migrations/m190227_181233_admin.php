<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181233_admin extends Migration
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
            '{{%admin}}',
            [
                'id'=> $this->primaryKey(11),
                'username'=> $this->string(255)->notNull(),
                'email'=> $this->string(255)->notNull(),
                'nama'=> $this->string(255)->notNull(),
                'password_hash'=> $this->string(255)->notNull(),
                'password_reset_token'=> $this->string(255)->null()->defaultValue(null),
                'auth_key'=> $this->string(32)->notNull(),
                'avatar'=> $this->string(255)->null()->defaultValue('profile.jpg'),
                'tempat_lahir'=> $this->string(255)->null()->defaultValue(null),
                'tanggal_lahir'=> $this->date()->null()->defaultValue(null),
                'alamat'=> $this->string(255)->null()->defaultValue(null),
                'status'=> $this->smallInteger(6)->notNull()->defaultValue(10),
                'created_at'=> $this->integer(),
                'updated_at'=> $this->integer(),
            ],$tableOptions
        );
        $this->createIndex('username','{{%admin}}',['username'],true);
        $this->createIndex('email','{{%admin}}',['email'],true);
        $this->createIndex('password_reset_token','{{%admin}}',['password_reset_token'],true);
        $this->createIndex('idx-admin','{{%admin}}',['username','nama','email'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('username', '{{%admin}}');
        $this->dropIndex('email', '{{%admin}}');
        $this->dropIndex('password_reset_token', '{{%admin}}');
        $this->dropIndex('idx-admin', '{{%admin}}');
        $this->dropTable('{{%admin}}');
    }
}
