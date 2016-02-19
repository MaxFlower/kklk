<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdCategory */

$this->title = 'Create Ad Category';
$this->params['breadcrumbs'][] = ['label' => 'Ad Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
