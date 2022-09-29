<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%project_user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%role}}`
 */
class m220928_215029_add_role_id_column_to_project_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%project_user}}', 'role_id', $this->integer());

        // creates index for column `role_id`
        $this->createIndex(
            '{{%idx-project_user-role_id}}',
            '{{%project_user}}',
            'role_id'
        );

        // add foreign key for table `{{%role}}`
        $this->addForeignKey(
            '{{%fk-project_user-role_id}}',
            '{{%project_user}}',
            'role_id',
            '{{%role}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%role}}`
        $this->dropForeignKey(
            '{{%fk-project_user-role_id}}',
            '{{%project_user}}'
        );

        // drops index for column `role_id`
        $this->dropIndex(
            '{{%idx-project_user-role_id}}',
            '{{%project_user}}'
        );

        $this->dropColumn('{{%project_user}}', 'role_id');
    }
}
