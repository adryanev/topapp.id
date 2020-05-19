<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151407_tag_beritaDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%tag_berita}}',
                           ["id_berita", "id_tag", "ord"],
                            [
    [
        'id_berita' => '8',
        'id_tag' => '7',
        'ord' => '0',
    ],
    [
        'id_berita' => '9',
        'id_tag' => '8',
        'ord' => '0',
    ],
    [
        'id_berita' => '10',
        'id_tag' => '8',
        'ord' => '0',
    ],
    [
        'id_berita' => '7',
        'id_tag' => '10',
        'ord' => '0',
    ],
    [
        'id_berita' => '13',
        'id_tag' => '10',
        'ord' => '0',
    ],
    [
        'id_berita' => '13',
        'id_tag' => '11',
        'ord' => '1',
    ],
    [
        'id_berita' => '13',
        'id_tag' => '12',
        'ord' => '2',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%tag_berita}} CASCADE');
    }
}
