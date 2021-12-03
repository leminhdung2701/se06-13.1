<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
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

            // [
            //     'attribute'=>'id',
            //     'headerOptions'=>[
            //         'style'=>'width:15px;text-align:center'
            //     ],
            //     'contentOptions'=>[
            //         'style'=>'width:15px;text-align:center'
            //     ],
            // ],
            [
                'attribute'=>'id_parent',
                'headerOptions'=>[
                    'style'=>'text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'text-align:center'
                ],
                'content'=>function($model){
                    if($model->id_parent==0){
                        return "Danh mục gốc";
                    }
                    else{
                        $parent = Category::find()->where(['id'=>$model->id_parent])->one();
                        if($parent){
                            return $parent->name;
                        }
                        else{
                            return "không rõ";
                        }
                    }

                }
            ],
            
            [
                'attribute'=>'name',
                'headerOptions'=>[
                    'style'=>'text-align:center'
                ],
                'contentOptions'=>[
                    'style'=>'text-align:center'
                ],
            ],
            
            [
                'contentOptions'=>[
                    'style'=>'width:150px;text-align:center'
                ],
                'class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>