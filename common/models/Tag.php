<?php

namespace common\models;

use Yii;
use common\models\Products;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property int|null $frequency
 * @property string $name
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['frequency'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'frequency' => 'Frequency',
            'name' => 'Name',
        ];
    }
    public function getTours() // is a RELATIONSHIP to the model you wish to attach your tags
    {
        return $this->hasMany(Products::className(), ['id' => 'product_id'])->viaTable('products_tags', ['tag_id' => 'id']);
    }
    public static function findAllByName($name)
    {
        return Tag::find()
            ->where(['like', 'name', $name])->limit(50)->all();
    }
}