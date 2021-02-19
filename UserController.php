<?php


namespace app\controllers;


use app\models\Phone;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}
