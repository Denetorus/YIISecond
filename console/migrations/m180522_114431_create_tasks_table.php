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
            'project_id' =>$this->integer()

        ]);

        $this->addForeignKey('fk_tasks_user','tasks', 'user_id', 'user', 'id');
        $this->addForeignKey('fk_tasks_project','tasks', 'project_id', 'project', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }
}
