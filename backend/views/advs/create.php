<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Advs */

$this->title = 'Create Advs';
$this->params['breadcrumbs'][] = ['label' => 'Advs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
