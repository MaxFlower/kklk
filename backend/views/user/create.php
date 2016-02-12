<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'User Manager', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create container">

    <div class="row">
    	<div class="col-lg-6 col-xs-12">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
    	</div>
    </div>
</div>
