<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $created_at
 * @property int $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
        ];
    }

    /**
     * @return $this
     */
    public function getProduct(){
        return $this->hasMany(Product::class,['id'=>'product_id'])->viaTable('product_in_order',['order_id'=>'id']);
    }
}
