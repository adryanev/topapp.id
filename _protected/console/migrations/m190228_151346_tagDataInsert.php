<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151346_tagDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%tag}}',
                           ["id", "nama_tag", "count", "created_at", "updated_at"],
                            [
    [
        'id' => '7',
        'nama_tag' => 'android',
        'count' => '2',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '8',
        'nama_tag' => 'facebook',
        'count' => '2',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '9',
        'nama_tag' => 'new',
        'count' => '0',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '10',
        'nama_tag' => 'ubuntu',
        'count' => '2',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '11',
        'nama_tag' => 'kernel',
        'count' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '12',
        'nama_tag' => 'reboot',
        'count' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '13',
        'nama_tag' => 'acer',
        'count' => '0',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '14',
        'nama_tag' => 'film',
        'count' => '0',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '15',
        'nama_tag' => 'war',
        'count' => '0',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id' => '16',
        'nama_tag' => 'training',
        'count' => '1',
        'created_at' => '1551366561',
        'updated_at' => '1551366561',
    ],
    [
        'id' => '17',
        'nama_tag' => 'web',
        'count' => '0',
        'created_at' => '1551366589',
        'updated_at' => '1551366589',
    ],
    [
        'id' => '18',
        'nama_tag' => 'php',
        'count' => '0',
        'created_at' => '1551366595',
        'updated_at' => '1551366595',
    ],
    [
        'id' => '19',
        'nama_tag' => 'yii2',
        'count' => '0',
        'created_at' => '1551366601',
        'updated_at' => '1551366601',
    ],
    [
        'id' => '20',
        'nama_tag' => 'kotlin',
        'count' => '0',
        'created_at' => '1551366606',
        'updated_at' => '1551366606',
    ],
    [
        'id' => '21',
        'nama_tag' => 'kegiatan',
        'count' => '1',
        'created_at' => '1551366617',
        'updated_at' => '1551366617',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%tag}} CASCADE');
    }
}
