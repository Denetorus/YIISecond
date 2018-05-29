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

    public function actionView($id){

        return new ActiveDataProvider([
                'query' => Tasks::findOne($id)
            ]
        );

    }

    public function actionDelete($id){

        return new ActiveDataProvider([
                'query' => Tasks::deleteAll('id = '.$id)
            ]
        );

    }

    public function actionCreate(){
        $model = new tasks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return '{true}';
        }
        return '{false}';

    }

}