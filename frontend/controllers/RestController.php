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

        return Tasks::findModel($id)->delete();


    }

    public function actionCreate(){
        $model = new tasks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $model;
        }
        return $model;

    }

    public function actionUpdate($id)
    {

        $model = $this->modelClass->findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $model;
        }
        return $model;

    }

}