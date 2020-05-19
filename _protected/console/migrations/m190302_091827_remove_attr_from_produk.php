<?php

use yii\db\Migration;

/**
 * Class m190302_091827_remove_attr_from_produk
 */
class m190302_091827_remove_attr_from_produk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropColumn('{{%produk}}','harga');
        $this->dropColumn('{{%produk}}','source_code');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190302_091827_remove_attr_from_produk cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190302_091827_remove_attr_from_produk cannot be reverted.\n";

        return false;
    }
    */
}
