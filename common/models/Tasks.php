<?php

namespace common\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property int $user_id
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $file
 * @property int $project_id
 *
 * @property Project $project
 * @property User $user
 */
class Tasks extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['user_id', 'project_id'], 'default', 'value' => null],
            [['user_id', 'project_id'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['file'], 'string', 'max' => 100],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date' => 'Date',
            'user_id' => 'User ID',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'file' => 'File',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
