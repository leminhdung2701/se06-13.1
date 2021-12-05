<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],  
        ]) ?>
    </p>

    <div class="site-index">
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <style>
        model-viewer {
            width: 600px;
            height: 350px;
            margin: 0;
        }
        </style>
        <!-- <model-viewer src="uploads/1638693890/Astronaut.glb"></model-viewer> -->
        <model-viewer camera-controls src='<?=$model->file_path?>'>
        </model-viewer>

    </div>




    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'user_id',
            'title',
            'description',
            [
                'attribute'=>'category_id',
                'value'=>function($model){
                    return $model->getCategory(); 
                }
            ],
            [            
                'attribute'=>'tagNames',
                'value'=>function($model){
                    return $model->getTags(); 
                }
            ],
            'file_name',
            // [
            //     'attribute'=>'file_path'
            // ],
            [
                'attribute'=>'status',
                'value'=>function($model){
                    if($model->status==0){
                        return 'Không cho tải xuống';
                    }
                    else{
                        return 'Cho tải xuống';
                    }

                }
            ],
            [
                'attribute'=>'created_at',
                'format'=>'raw',
                'value'=>function($model){
                    return date('d-m-Y',$model->created_at);
                }
            ],
            [
                'attribute'=>'updated_at',
                'value'=>function($model){
                    return date('d-m-Y',$model->created_at);
                }
            ],
        ],
    ]) ?>
</div>