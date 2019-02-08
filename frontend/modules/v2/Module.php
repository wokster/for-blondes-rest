<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 05.02.2019
 * Time: 13:36
 */

namespace frontend\modules\v2;


use common\models\User;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBasicAuth;

class Module extends \yii\base\Module
{
	/**
	 * {@inheritdoc}
	 */
	public $controllerNamespace = 'frontend\modules\v2\controllers';

	/**
	 * {@inheritdoc}
	 */
	public function init()
	{
		parent::init();
		\Yii::$app->user->enableSession = false;
	}

	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
			'class' => HttpBasicAuth::class
		];
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
}