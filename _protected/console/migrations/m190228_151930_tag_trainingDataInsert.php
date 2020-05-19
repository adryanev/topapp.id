<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151930_tag_trainingDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%tag_training}}',
                           ["id_training", "id_tag", "ord"],
                            [
    [
        'id_training' => '2',
        'id_tag' => '21',
        'ord' => '0',
    ],
    [
        'id_training' => '2',
        'id_tag' => '16',
        'ord' => '1',
    ],
    [
        'id_training' => '2',
        'id_tag' => '7',
        'ord' => '2',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%tag_training}} CASCADE');
    }
}
