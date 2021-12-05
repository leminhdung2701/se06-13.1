<?php

namespace backend\models;

use phpDocumentor\Reflection\Types\String_;
use Yii;

use dosamigos\taggable\Taggable;
/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property int $category_id
 * @property string $file_name
 * @property string $file_path
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */

class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $filemodel3d;
    public $tagNames;

    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'description', 'category_id', 'file_name', 'file_path', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'category_id', 'status', 'created_at', 'updated_at',], 'integer'],
            [['title', 'description', 'file_name', 'file_path','tagNames',], 'string', 'max' => 255],
            [['filemodel3d'],'file','extensions'=>'glb'],
            [['tagNames'], 'safe'   ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'description' => 'Description',
            'category_id' => 'Danh mục',
            'file_name' => 'File Name',
            'file_path' => 'File Path',
            'status' => 'Tải xuống',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
    public function behaviors() {
        return [
            [
                'class' => Taggable::className(),
            ],
        ];
    }
    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])->viaTable('products_tags', ['product_id' => 'id']);
    }
    public function getCategory()
    {
        ;
        $category = Category::findOne($this->category_id);
       return $category->name;
    }
    public function getTags1()
    {
        $query = Tag::find()
            ->select('name')  // make sure same column name not there in both table
            ->innerJoin('products_tags', 'products_tags.tag_id = tag.id')
            ->where(['products_tags.product_id' => $this->id])
            ->all();
        $tag = "";
        foreach ($query as $row){
            $tag = $tag.$row->name." ";
        }
        return $tag;
    }
}
