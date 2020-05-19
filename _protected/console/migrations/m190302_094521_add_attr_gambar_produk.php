<?php

use yii\db\Migration;

/**
 * Class m190302_094521_add_attr_gambar_produk
 */
class m190302_094521_add_attr_gambar_produk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('{{%produk}}','gambar',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%produk}}','gambar');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190302_094521_add_attr_gambar_produk cannot be reverted.\n";

        return false;
    }
    */
}
