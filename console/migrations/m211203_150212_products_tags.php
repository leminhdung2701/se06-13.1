<?php

use yii\db\Migration;

/**
 * Class m211203_150212_products_tags
 */
class m211203_150212_products_tags extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%products_tags}}', [
            'product_id' => $this->integer(),
            'tag_id' =>$this->integer(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%products_tags}}');
    }
}
