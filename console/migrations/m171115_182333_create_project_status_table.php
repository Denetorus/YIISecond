<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project_status`.
 */
class m171115_182333_create_project_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project_status', [
            'id' => $this->primaryKey(),
            'project_status_name' => $this->string(30)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project_status');
    }
}
