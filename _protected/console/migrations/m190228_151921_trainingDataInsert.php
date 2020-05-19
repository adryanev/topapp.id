<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151921_trainingDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%training}}',
                           ["id", "nama_training", "deskripsi", "foto", "created_at", "updated_at"],
                            [
    [
        'id' => '2',
        'nama_training' => 'Pelatihan Android Dasar',
        'deskripsi' => '<p>Paket pelatihan Android Dasar</p>',
        'foto' => '3.jpg',
        'created_at' => '1551366670',
        'updated_at' => '1551366670',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%training}} CASCADE');
    }
}
