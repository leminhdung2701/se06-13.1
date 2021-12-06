<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = 'Upload 3Dmodel';
$this->params['breadcrumbs'][] = ['label' => 'Upload', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            rel="stylesheet">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    
</head>
<body>


    <!-- drag and drop file -->
    <script>
        dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
        evt.preventDefault();
        };

        dropContainer.ondrop = function(evt) {
        // pretty simple -- but not for IE :(
        fileInput.files = evt.dataTransfer.files;

        // If you want to use some of the dropped files
        const dT = new DataTransfer();
        dT.items.add(evt.dataTransfer.files[0]);
        dT.items.add(evt.dataTransfer.files[3]);
        fileInput.files = dT.files;

        evt.preventDefault();
        };
</script>

<div class="video-create">

<h1><?= Html::encode($this->title) ?></h1>

<div class="d-flex flex-column justify-content-center align-items-center">

    <div class="upload-icon" id="dropContainer" >
        <i class="fas fa-upload" ></i>
    </div>
    <br>

    <div  class='m-2' id="dropContainer" >
        Drag and drop a file you want to upload
    </div>
    
    <p class="text-muted">We support OBJ file</p>

    <?php $form = \yii\bootstrap4\ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
                    
    ]) ?>

    

    <form action="<?php echo htmlspecialchars($_SERVER[ "PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="model3d" class="btn btn-primary" id="fileInput"> 
        <br><input type="submit" name="guithongtin" value="Upload" class="btn-success px-5 mt-3 ms-5" > 
    </form>
    <?php
        if(isset($_POST['guithongtin'])&&($_POST['guithongtin'])){
      
            $modelpath=basename($_FILES['model3d']['name']);  

            $target_dir = "upload/";
            $target_file = $target_dir . $modelpath;
            echo $modelpath;
            echo "<br> <img src='".$target_file."' alt='haha' width='500' height='500'>";
            
        if (move_uploaded_file($_FILES["model3d"]["tmp_name"], $target_file)){
            echo "";
        }

    }
    ?>
<?php \yii\bootstrap4\ActiveForm::end() ?>
</div>

</div>
</body>
</html>
