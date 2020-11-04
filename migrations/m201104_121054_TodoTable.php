<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m201104_121054_TodoTable
 */
class m201104_121054_TodoTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201104_121054_TodoTable cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('todo', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
            'done' => $this->boolean()->defaultValue(false),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime()
        ]);
    }

    public function down()
    {
        $this->dropTable('todo');
    }

}
