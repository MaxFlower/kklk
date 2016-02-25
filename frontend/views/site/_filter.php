<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\User;
use common\models\ArticleCategory;

/* @var $this yii\web\View */
/* @var $model common\models\ArticlesSearch */
/* @var $form yii\widgets\ActiveForm */

$authors = User::find()->all();

$items = ArrayHelper::map($authors,'id','username');

$params = [
        'prompt' => 'Укажите автора'
    ];

$category = ArticleCategory::find()->all();

$categoryItem = ArrayHelper::map($category,'id','title');

$categoryParams = [
        'prompt' => 'Укажите категорию'
    ];

?>

<div class="articles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['articles'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?php // $form->field($model, 'anons') ?>

    <?php // $form->field($model, 'content') ?>

    <?php // $form->field($model, 'picture_path') ?>

    <?= $form->field($model, 'author_id')->dropDownList($items,$params) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryItem, $categoryParams) ?>

    <?php // echo $form->field($model, 'publish_status') ?>

    <?php // echo $form->field($model, 'publish_date') ?>

    <?=  $form->field($model, 'rank') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-success']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
