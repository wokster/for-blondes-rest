<?php

namespace frontend\controllers;

use frontend\models\rest\Product;
use Yii;
use yii\helpers\ArrayHelper;

class ProductController extends BaseApiController
{
	public $modelClass = Product::class;

	public function actionColors(){
		return ArrayHelper::map(Product::find()->select('color')->groupBy('color')->all(),'color','color');
	}
}
