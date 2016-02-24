<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Advs */

$this->title = 'Создать объявление';
$this->params['breadcrumbs'][] = ['label' => 'Объявления', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advs-create">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
