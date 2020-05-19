<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151334_kategoriDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%kategori}}',
                           ["id_kategori", "nama_kategori", "created_at", "updated_at"],
                            [
    [
        'id_kategori' => '1',
        'nama_kategori' => 'Augmented Reality',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '3',
        'nama_kategori' => 'Android',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '4',
        'nama_kategori' => 'Booking Apps',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '5',
        'nama_kategori' => 'Games',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '6',
        'nama_kategori' => 'LBS',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '7',
        'nama_kategori' => 'Smart Apps',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '8',
        'nama_kategori' => 'Aplikasi Web',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_kategori' => '9',
        'nama_kategori' => 'Islami',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%kategori}} CASCADE');
    }
}
