<?php

use yii\db\Migration;

/**
 * Class m230316_131449_categoria
 */
class m230316_131449_categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('categoria', array(
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('categoria');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_131449_categoria cannot be reverted.\n";

        return false;
    }
    */
}
