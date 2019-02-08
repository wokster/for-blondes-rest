<?php
namespace common\models;

use yii;

/**
 * User model
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 */
class Document extends yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%documents}}';
    }

    public function fields(){
        return [
            'name'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['name', 'string'],
            ['user_id', 'integer'],
        ];
    }
}
