<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdCategory */

$this->title = 'Редактирование категории объявлений: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории объявлений', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="ad-category-update">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
