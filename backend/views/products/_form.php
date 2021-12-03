<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use mludvik\tagsinput\TagsInputWidget; 

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="site-index">
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <style>
        model-viewer {
            width: 600px;
            height: 350px;
            margin: 0;
        }
        </style>
        <model-viewer camera-controls src="http://localhost/se06-13.1/uploads/1638076747/Cubone.glb"></model-viewer>
    </div>



    <?= $form->field($model, 'filemodel3d')->fileInput() ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>
    <?php $cat = new \backend\models\Category()?>
    <?= $form->field($model, 'category_id')->dropDownList(
        $cat->getParent(),
        [
            'prompt'=>'Chọn danh mục'
        ]

    ) ?>

    <?= $form->field($model, 'tags')->widget(TagsInputWidget::className()) ?>

    <?=$form->field($model, 'status')->checkbox([
        'label' => Yii::t('app', 'Cho tải xuống'),
        'checked' => 1,
        'uncheck' => 0,
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>