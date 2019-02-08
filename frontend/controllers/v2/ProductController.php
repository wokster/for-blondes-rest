<?php

namespace frontend\controllers\v2;

use frontend\controllers\BaseApiController;
use frontend\models\rest\Product;
use Yii;
use yii\helpers\ArrayHelper;

class ProductController extends BaseApiController
{
	public $modelClass = Product::class;

	public function actionColors(){
		return [12,123,44];
	}
}
