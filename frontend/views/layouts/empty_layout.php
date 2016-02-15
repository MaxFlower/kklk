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

    <div class="contentForm">        
        <?= $content ?>
    </div>
</div>


<footer class="col-md-4 col-md-offset-4">
    <p>Калининградский клуб любителей кошек (ККЛК) &copy; <?= date('Y') ?>  тел.: 8-911-123-34-45</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
