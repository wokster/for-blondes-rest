<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 29.01.2019
 * Time: 18:30
 */

namespace frontend\models;


use common\models\Document;

class User extends \common\models\User
{

	public function fields()
	{
		return [
			'id',
			'username',
			'email',
			'mama',
			'is_rrr' => function($model){
				return $model->id == 1 ? 'rrr': 'ddd';
			}
		];
	}

	public function extraFields()
	{
		return [
			'documents'
		];
	}

	public function getDocuments(){
		return $this->hasMany(Document::class,['user_id'=>'id']);
	}

	public function getMama(){
		return $this->id . 'fff';
	}
}