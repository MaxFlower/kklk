<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Регистрация / ККЛК';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions3 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-box-body">
        <p class="login-box-msg">Заполните следующие поля, чтобы зарегистрироваться:</p>

            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'enableClientValidation' => true]); ?>

                <?= $form
                    ->field($model, 'username', $fieldOptions1)
                    ->label(false)
                    ->textInput(['placeholder' => $model->getAttributeLabel('Ваш логин')]) ?>

                <?= $form
                    ->field($model, 'email', $fieldOptions2)
                    ->label(false)
                    ->textInput(['placeholder' => $model->getAttributeLabel('Ваш e-mail')]) ?>

                <?= $form
                    ->field($model, 'password', $fieldOptions3)->passwordInput()
                    ->label(false)
                    ->passwordInput(['placeholder' => $model->getAttributeLabel('Ваш пароль')]) ?>

            <div class="row">
                <div class="col-xs-5 col-xs-offset-7">
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>                
            </div>

            <?php ActiveForm::end(); ?>
            

            <a href="/login">Я уже зарегистрированн</a><br>
           
        
    </div>
</div>
