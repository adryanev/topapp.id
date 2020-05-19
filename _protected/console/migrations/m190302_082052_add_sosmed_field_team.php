<?php

use yii\db\Migration;

/**
 * Class m190302_082052_add_sosmed_field_team
 */
class m190302_082052_add_sosmed_field_team extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('{{%team}}','facebook_link',$this->string());
        $this->addColumn('{{%team}}','github_link',$this->string());
        $this->addColumn('{{%team}}','twitter_link',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%team}}','facebook_link');
        $this->dropColumn('{{%team}}','github_link');
        $this->dropColumn('{{%team}}','twitter_link');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190302_082052_add_sosmed_field_team cannot be reverted.\n";

        return false;
    }
    */
}
