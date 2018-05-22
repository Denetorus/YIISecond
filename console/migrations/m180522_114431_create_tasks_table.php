<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tasks`.
 */
class m180522_114431_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'date' => $this->dateTime(),
            'user_id' => $this->integer(),
            'description' => $this->text(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'file' => $this->string(100),

        ]);

        $this->addForeignKey('fk_tasks_user','tasks', 'user_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
        $this->dropForeignKey('fk_tasks_user', 'tasks');
    }
}
