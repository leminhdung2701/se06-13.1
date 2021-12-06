<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $cat = new \common\models\Category()?>
    <?php $danhmuc = $cat->getParent();?>
    <?$danhmucgoc = array('Danh mục gốc');?>
    <?$danhmuctatca = array_merge($danhmucgoc,$danhmuc);?>
    <?= $form->field($model, 'id_parent')->dropDownList(
            [0=>'Danh mục gốc','Danh mục con'=>$danhmuc],
            [
                    'prompt'=>'Chọn danh mục cha'
            ]
    ) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>