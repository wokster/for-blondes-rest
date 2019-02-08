<?php

use yii\db\Migration;

/**
 * Class m190202_115218_add_demo_to_product_in_order
 */
class m190202_115218_add_demo_to_product_in_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rows = [];
        for($i = 1; $i < 201; $i++){
            $product_number = rand(1,7);
            $product_ids = array_rand(range(1, 100),$product_number);
            for($k = 1; $k < $product_number; $k++){
                $faker = \Faker\Factory::create();
                $rows[] = [
                    $faker->unixTime('now'),
                    $faker->randomFloat(2,10,10000),
                    $product_ids[$k],
                    $i,
                ];
            }
        }
        $this->batchInsert('product_in_order',[
            'created_at',
            'price',
            'product_id',
            'order_id'
        ],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('product_in_order');

        return true;
    }
}
