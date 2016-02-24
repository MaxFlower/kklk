<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Events */

$this->title = 'Создать событие';
$this->params['breadcrumbs'][] = ['label' => 'События', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-create">
	
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
