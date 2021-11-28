<?php

use yii\db\Migration;

/**
 * Class m211128_030043_category
 */
class m211128_030043_category extends Migration
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

        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'id_parent' =>$this->integer()->notNull()->defaultValue(0),//0 la ko co cha
            'name' =>$this->string()->notNull(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
    }
}
