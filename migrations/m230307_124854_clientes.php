<?php

use yii\db\Migration;

/**
 * Class m230307_124854_clientes
 */
class m230307_124854_clientes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('clientes', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'endereco' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230307_124854_clientes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230307_124854_clientes cannot be reverted.\n";

        return false;
    }
    */
}
