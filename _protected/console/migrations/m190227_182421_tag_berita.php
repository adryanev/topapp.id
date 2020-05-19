<?php

use yii\db\Schema;
use yii\db\Migration;

class m190227_182421_tag_berita extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%tag_berita}}',
            [
                'id_berita'=> $this->integer(11)->null()->defaultValue(null),
                'id_tag'=> $this->integer(11)->null()->defaultValue(null),
                'ord'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('idx-tag_berita','{{%tag_berita}}',['id_berita','id_tag'],false);
        $this->createIndex('fk-tag_berita-id_tag','{{%tag_berita}}',['id_tag'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('idx-tag_berita', '{{%tag_berita}}');
        $this->dropIndex('fk-tag_berita-id_tag', '{{%tag_berita}}');
        $this->dropTable('{{%tag_berita}}');
    }
}
