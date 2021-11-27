<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Products;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'header'=>'STT',
                'headerOptions'=>[
                        'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                        'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'id',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'user_id',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'title',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'description',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'category_id',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'file_name',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'file_path',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
            ],
            [
                'attribute'=>'status',
                'headerOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'width:15px;text-align:center'
                ],
                'content'=>function($model){
                    if($model->status==0){
                        return '<span class="badge badge-danger">Không cho tải xuống</span>';
                    }
                    else{
                        return '<span class="badge badge-success">Cho tải xuống</span>';
                    }

                }
            ],
            [
                'attribute'=>'created_at',
                'content'=>function($model){
                    return date('d-m-Y',$model->created_at);
                }
            ],
            [
                'attribute'=>'updated_at',
                'content'=>function($model){
                    return date('d-m-Y',$model->created_at);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
