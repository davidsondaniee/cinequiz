<?php

use yii\db\Migration;

/**
 * Class m230316_131504_usuario
 */
class m230316_131504_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('usuario', array(
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'overal' => $this->int(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_131504_usuario cannot be reverted.\n";

        return false;
    }
    */
}
