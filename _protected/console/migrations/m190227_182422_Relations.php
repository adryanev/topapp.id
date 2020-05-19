<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_182422_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_tag_berita_id_berita',
            '{{%tag_berita}}','id_berita',
            '{{%berita}}','id_berita',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_tag_berita_id_tag',
            '{{%tag_berita}}','id_tag',
            '{{%tag}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_tag_berita_id_berita', '{{%tag_berita}}');
        $this->dropForeignKey('fk_tag_berita_id_tag', '{{%tag_berita}}');
    }
}
