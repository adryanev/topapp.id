<?php

use yii\db\Migration;

/**
 * Class m190302_110426_remove_total_order
 */
class m190302_110426_remove_total_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropColumn('{{%order}}','total');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190302_110426_remove_total_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190302_110426_remove_total_order cannot be reverted.\n";

        return false;
    }
    */
}
