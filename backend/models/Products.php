<?php

namespace backend\models;

use Yii;

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
            [['user_id', 'category_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'description', 'file_name', 'file_path'], 'string', 'max' => 255],
            [['filemodel3d'],'file','extensions'=>'glb'],

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
            'category_id' => 'Chọn danh mục',
            'file_name' => 'File Name',
            'file_path' => 'File Path',
            'status' => 'Tải xuống',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
}