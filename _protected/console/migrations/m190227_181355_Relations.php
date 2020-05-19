<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_181355_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_berita_penerbit_berita',
            '{{%berita}}','penerbit_berita',
            '{{%admin}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_berita_penerbit_berita', '{{%berita}}');
    }
}
