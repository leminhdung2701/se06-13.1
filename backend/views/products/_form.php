<?php

use yii\helpers\FileHelper;
use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use dosamigos\selectize\SelectizeTextInput;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>
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
    <?php $cat = new \common\models\Category()?>
    <?= $form->field($model, 'category_id')->dropDownList(
        $cat->getParent(),
        [
            'prompt'=>'Chọn danh mục'
        ]

    ) ?>
    <?= $form->field($model, 'tagNames')->widget(SelectizeTextInput::className(), [
        // calls an action that returns a JSON object with matched
        // tags
        'loadUrl' => ['tag/list'],
        'options' => ['class' => 'form-control'],
        'clientOptions' => [
            'plugins' => ['remove_button'],
            'valueField' => 'name',
            'labelField' => 'name',
            'searchField' => ['name'],
            'create' => true,
        ],
    ])->hint('Use , to separate tags') ?>

    <?=$form->field($model, 'status')->checkbox([
        'label' => Yii::t('app', 'Cho tải xuống'),
        'checked' => 1,
        'uncheck' => 0,
    ]);?>

    <div class=" form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>