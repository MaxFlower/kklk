<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <header>
        <a href="<?= Yii::$app->homeUrl ?>"> 
            <div class="main-logo">
                <img src="img/logo_head.png"/>
            </div>
            <div class="main-label">
                <h1>Калининградский Клуб Любителей Кошек (ККЛК)</h1>
            </div>
        </a>
    </header>

    <nav>
        <li class="active"><a href="/site/index">Главная</a></li>
        <li><a href="#">Объявления</a></li>
        <li><a href="/site/contact">События</a></li>
        <li><a href="/site/about">О нас</a></li>

        <?php
        if (Yii::$app->user->isGuest) {
            echo "<li class='login'><a href='/site/signup'>Вход</a></li>";
            echo "<li class='signup'><a href='/site/signup'>Регистрация</a></li>";
        } else {
            /*Дописать метод post для выхода*/
            echo "<li class='signup'>" . Yii::$app->user->identity->username . "<a href='/site/logout'>Выход</a></li>";
        } 
        ?>        
        <div class="ribbon-left"><img src="img/ribbon.png"/></div>
        <div class="ribbon-right"><img src="img/ribbon.png"/></div>
    </nav>
    

    <div class="content">        
        <?= $content ?>
    </div>
</div>


<footer>
    <p>Калининградский клуб любителей кошек (ККЛК) &copy; <?= date('Y') ?>  тел.: 8-911-123-34-45</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
