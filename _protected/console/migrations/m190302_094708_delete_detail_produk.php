<?php

use yii\db\Migration;

/**
 * Class m190302_094708_delete_detail_produk
 */
class m190302_094708_delete_detail_produk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropTable('{{%detail_produk}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190302_094708_delete_detail_produk cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190302_094708_delete_detail_produk cannot be reverted.\n";

        return false;
    }
    */
}
