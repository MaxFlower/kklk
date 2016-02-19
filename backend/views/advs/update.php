<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Advs */

$this->title = 'Update Advs: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Advs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="advs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
