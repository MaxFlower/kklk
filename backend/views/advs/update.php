<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Advs */

$this->title = 'Редактировать объявление: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Объявления', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="advs-update">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
