<?php

namespace frontend\modules\v1\controllers;

use frontend\controllers\BaseApiController;
use frontend\modules\v1\models\Product;
use Yii;
use yii\helpers\ArrayHelper;

class ProductController extends BaseApiController
{
    public $modelClass = Product::class;

    public function actionColors(){
        return ['yes it is v1'];
    }
}
