<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $project_name
 * @property int $fk_user_id
 * @property int $fk_project_status
 *
 * @property Tasks[] $tasks
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_name', 'fk_user_id', 'fk_project_status'], 'required'],
            [['fk_user_id', 'fk_project_status'], 'default', 'value' => null],
            [['fk_user_id', 'fk_project_status'], 'integer'],
            [['project_name'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'fk_user_id' => 'Fk User ID',
            'fk_project_status' => 'Fk Project Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['project_id' => 'id']);
    }
}
