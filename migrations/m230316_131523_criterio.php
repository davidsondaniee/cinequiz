<?php

use yii\db\Migration;

/**
 * Class m230316_131523_criterio
 */
class m230316_131523_criterio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('criterio', array(
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('criterio');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_131523_criterio cannot be reverted.\n";

        return false;
    }
    */
}
