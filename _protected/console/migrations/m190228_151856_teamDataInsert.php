<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151856_teamDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%team}}',
                           ["id", "nama_lengkap", "jabatan", "foto", "created_at", "updated_at"],
                            [
    [
        'id' => '1',
        'nama_lengkap' => 'Adryan Eka Vandra',
        'jabatan' => 'CTO',
        'foto' => 'photo_2018-11-09_22-29-16.jpg',
        'created_at' => '1551366714',
        'updated_at' => '1551366714',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%team}} CASCADE');
    }
}
