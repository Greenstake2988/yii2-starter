<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%role}}`.
 */
class m220928_214441_create_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%role}}', [
		'id' => $this->primaryKey(),
		'name' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%role}}');
    }
}
