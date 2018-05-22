<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m171115_182114_create_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'project_name' => $this->string(70)->notNull(),
            'fk_user_id' => $this->integer()->notNull(),
            'fk_project_status' => $this->integer()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project');
    }
}
