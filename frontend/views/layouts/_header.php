<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar-expand-lg navbar-light bg-light shadow-sm'],
    'innerContainerOptions' => [
        'class' => 'container-fluid'
    ]
]);

$menuItems = [
    ['label' => 'Upload', 'url' => ['/products/create']],
];

if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => [
            'data-method' => 'post'
        ]
    ];
}
?>
    <form action="<?php  ?>"
            class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 " style='padding-right:300px' type="search" placeholder="Search"
            name="keyword"
            value="<?php echo Yii::$app->request->get('keyword') ?>">
        <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </form>

    <div class="dropdown ms-3">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Explore
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Animal</a></li>
    <li><a class="dropdown-item" href="#">Nature</a></li>
    <li><a class="dropdown-item" href="#">Fashion</a></li>
  </ul>
</div>

    <div class="dropdown ms-3">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        BUY 3D MODEL
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Technology</a></li>
        <li><a class="dropdown-item" href="#">Sport</a></li>
        <li><a class="dropdown-item" href="#">Music</a></li>
    </ul>
    </div>
    <i class="fas fa-shopping-cart ms-3" style='cursor:pointer'></i>
<?php
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto btn btn-secondary'],
    'items' => $menuItems,
]);
NavBar::end();
