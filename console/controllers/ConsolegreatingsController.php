<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class ConsolegreatingsController extends Controller
{

    public function actionIndex(){

        echo "Hello, World!!!";
        return 1;
    }
}