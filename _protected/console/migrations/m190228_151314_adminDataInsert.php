<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151314_adminDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%admin}}',
                           ["id", "username", "email", "nama", "password_hash", "password_reset_token", "auth_key", "avatar", "tempat_lahir", "tanggal_lahir", "alamat", "status", "created_at", "updated_at"],
                            [
    [
        'id' => '1',
        'username' => 'root',
        'email' => 'admin@topapp.id',
        'nama' => 'Admin topapp.id',
        'password_hash' => '$2y$13$tyy5A3UZe0ipSoaWDrbpXOfBE8bph0sawnVHrGu6RFfgD7Nihq9he',
        'password_reset_token' => null,
        'auth_key' => 'Pwys0TRico7Ha4YSyX2fmjABrFskscxh',
        'avatar' => 'White with Colorful Icon Computer Logo.png',
        'tempat_lahir' => 'Pekanbaru',
        'tanggal_lahir' => '2018-04-19',
        'alamat' => 'Pekanbaru',
        'status' => '10',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%admin}} CASCADE');
    }
}
