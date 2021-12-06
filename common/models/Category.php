<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $id_parent
 * @property string $name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    private $_cats = [];
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_parent'], 'integer'],
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
            'id_parent' => 'Danh mục cha',
            'name' => 'Tên danh mục',
        ];
    }
    public function getParent($parent=0,$level=''){
        $data = Category::find()->where(['id_parent'=>$parent])->all();
        $level.='-- ';
        if($data):
            foreach ($data as $item):
                if($item->id_parent==0){
                    $level = '';
                }
                $this->_cats[$item->id] = $level.$item->name;
                $this->getParent($item->id,$level);
            endforeach;
        endif;
        return $this->_cats;
    }
}