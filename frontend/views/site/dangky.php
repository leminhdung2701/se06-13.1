<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;

?>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Custom Theme files -->
    <link href="dangky/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Imports a model-viewer JavaScript code -->
    <!--It helps to handle how the 3D Object would be displayed -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">

        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    <div class="site-signup">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <div class="row">
                            <div class="col-lg-12">
                                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'email') ?>

                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <?= $form->field($model, 'password')->passwordInput()
                    ->label('Confirm Password') ?>


                                <div class="form-group">
                                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>

                </form>
                <div id="textsignup">
                    <p>Sign up with :</p>
                </div>
                <div id="icons">
                    <div id="iconsLogo">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <p>Already have an Account? <a href="#"> Login Now!</a></p>

            </div>
        </div>
        <div id="aSide">

            <!-- 3D objsect -->
            <!-- This inserts the 3D object inside the aside container -->
            <model-viewer src="assets/Horse.glb" alt="VR Headset" auto-rotate camera-controls ar
                ios-src="assets/HTC_Vive_Headset.gltf">
            </model-viewer>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/"
                    target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html>