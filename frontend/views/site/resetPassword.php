<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сброс пароля / ККЛК';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

?>
<div class="site-reset-password">
    
    <div class="row">
        <div class="col-xs-11">
            <p>Пожалуйста, установите новый пароль:</p>
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form
                ->field($model, 'password', $fieldOptions1)
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('Ваш новый пароль')]) ?>                

                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
