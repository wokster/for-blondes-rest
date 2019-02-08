<?php

namespace frontend\controllers;

use frontend\models\rest\Order;

class OrderController extends BaseApiController
{
	public $modelClass = Order::class;
}
