<?php

use yii\db\Migration;

/**
 * Class m230316_131628_avaliacao
 */
class m230316_131628_avaliacao extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('avaliacao',[
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ]);

        $this -> addForeignKey ( 'filme_id', 'criterio_id', 'usuario_id', 'nota');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('avaliacao');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_131628_avaliacao cannot be reverted.\n";

        return false;
    }
    */
}
