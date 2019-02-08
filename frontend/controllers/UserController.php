<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 29.01.2019
 * Time: 17:53
 */

namespace frontend\controllers;

use frontend\models\User;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
	public $modelClass = User::class;
}