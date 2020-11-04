<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m201104_183245_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'name' => $this->string(),
            'code' => $this->string()->notNull()->unique(),
            'population' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
