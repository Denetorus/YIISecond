<?php

namespace frontend\controllers;


use common\models\Tasks;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;


class RestController extends ActiveController
{

    public $modelClass = Tasks::class;

    public function actionIndex(){

        return new ActiveDataProvider([
            'query' => Tasks::find()
            ]
        );

    }

}