<?php

use yii\db\Migration;

/**
 * Class m190227_184923_add_produk_training
 */
class m190227_184923_add_produk_training extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%training}}',[

            'id'=>$this->primaryKey(),
            'nama_training'=>$this->string()->notNull(),
            'deskripsi'=>$this->text(),
            'foto'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%tag_training}}',[
            'id_training'=>$this->integer(),
            'id_tag'=>$this->integer(),
            'ord'=>$this->integer()
        ],$tableOptions);

        $this->addForeignKey('fk-tag_training-training','{{%tag_training}}','id_training',
            '{{%training}}','id');

        $this->createIndex('idx-tag_training','{{%tag_training}}',['id_training','id_tag'],false);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-tag_training','{{%tag_training}}');
        $this->dropForeignKey('fk-tag_training-training','{{%tag_training}}');
        $this->dropTable('{{%training}}');
        $this->dropTable('{{%tag_training}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190227_184923_add_produk_training cannot be reverted.\n";

        return false;
    }
    */
}
