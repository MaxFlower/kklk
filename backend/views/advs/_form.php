<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\User;
use common\models\AdCategory;  

/* @var $this yii\web\View */
/* @var $model common\models\Advs */
/* @var $form yii\widgets\ActiveForm */

$authors = User::find()->all();

$items = ArrayHelper::map($authors,'id','username');

$params = [
        'prompt' => 'Укажите автора'
    ];

$category = AdCategory::find()->all();

$categoryItem = ArrayHelper::map($category,'id','title');

$categoryParams = [
        'prompt' => 'Укажите категорию'
    ];

?>

<div class="advs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anons')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 8]) ?>    

    <?= $form->field($model, 'picture_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->dropDownList($items,$params) ?>

    <?= $form->field($model, 'publish_status')->dropDownList([ 'draft' => 'Draft', 'publish' => 'Publish', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryItem, $categoryParams) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
