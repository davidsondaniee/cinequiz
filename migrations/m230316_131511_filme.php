<?php

use yii\db\Migration;

/**
 * Class m230316_131511_filme
 */
class m230316_131511_filme extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('filme', array(
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('filme');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_131511_filme cannot be reverted.\n";

        return false;
    }
    */
}
