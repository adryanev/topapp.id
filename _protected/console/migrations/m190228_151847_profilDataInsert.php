<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151847_profilDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%profil}}',
                           ["id_profil", "foto_profil", "isi_profil", "nama_app", "alamat", "email", "hp", "created_at", "updated_at"],
                            [
    [
        'id_profil' => '1',
        'foto_profil' => 'logo.png',
        'isi_profil' => '<p style="text-align: justify;"><strong>TopApp.id</strong> merupakan wadah riset dalam bentuk inovasi aplikasi di bidang teknologi informasi yang dapat menyelesaikan suatu permasalahan dan bisa digunakan oleh masyarakat.</p>',
        'nama_app' => 'TOPAPP.ID',
        'alamat' => 'Pekanbaru- Riau',
        'email' => 'admin@topapp.id',
        'hp' => '081268680908',
        'created_at' => '1551364390',
        'updated_at' => '1551366735',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%profil}} CASCADE');
    }
}
