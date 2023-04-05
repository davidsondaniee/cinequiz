<?php

use yii\db\Migration;

/**
 * Class m230316_131529_filme
 */
class m230316_131529_filme extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('filme_categoria', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ]);

        $this -> addForeignKey ( 'filme_id' , 'categoria_id' ,);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('filme_categoria');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_131529_filme cannot be reverted.\n";

        return false;
    }
    */
}
