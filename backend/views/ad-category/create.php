<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdCategory */

$this->title = 'Создание категории объявлений';
$this->params['breadcrumbs'][] = ['label' => 'Категории объявлений', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-category-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
