<?php

namespace frontend\modules\v1\controllers;

use frontend\controllers\BaseApiController;
use frontend\modules\v1\models\Product;
use Yii;
use yii\filters\AccessControl;

class ProductController extends BaseApiController
{
    public $modelClass = Product::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ];
        return $behaviors;
    }

    public function actionColors(){
        return ['yes it is v1'];
    }
}
