<?php

namespace frontend\modules\v2\controllers;

use frontend\controllers\BaseApiController;
use frontend\modules\v2\models\Product;
use Yii;

class ProductController extends BaseApiController
{
    public $modelClass = Product::class;

    public function actionColors(){
        return ['yes it is v2'];
    }
}
