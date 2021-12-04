<?php

use yii\helpers\Html;
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

        <!-- Use it like any other HTML element -->

        <model-viewer src="http://localhost/se06-13.1/uploads/1638609720/Astronaut.glb" alt="A 3D model of an astronaut"
            ar ar-modes="webxr scene-viewer quick-look" environment-image="neutral" auto-rotate camera-controls>
        </model-viewer>

    </div>




    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'title',
            'description',
            'category_id',
            'tagNames',
            'file_name',
            'file_path',
            'status',
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