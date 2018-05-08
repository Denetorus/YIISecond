<?php
/**
 * Created by PhpStorm.
 * User: gfc-c
 * Date: 08.05.2018
 * Time: 15:20
 */

namespace frontend\controllers;


use yii\web\Controller;

class HelloController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }
}