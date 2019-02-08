<?php

use yii\db\Migration;

/**
 * Class m190202_102330_create_product_order
 */
class m190202_102330_create_product_in_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('product_in_order',[
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'price' => $this->decimal(10,2),
            'product_id' => $this->integer(),
            'order_id' => $this->integer(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_in_order');

        return true;
    }
}
