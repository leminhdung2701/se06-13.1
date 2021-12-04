<?php

use yii\db\Migration;

/**
 * Class m211204_035504_tag
 */
class m211204_035504_tag extends Migration
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

        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'frequency'=>$this->integer(),
            'name' =>$this->string()->notNull(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tag}}');
    }
}
