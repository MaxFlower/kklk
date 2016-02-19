<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сброс пароля / ККЛК';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

?>
<div class="resetpassword">
    <div class="row">
        <div class="col-xs-11">
            <p>Пожалуйста, введите Ваш e-mail. Письмо, содержащее ссылку для сброса пароля, будет Вам выслано после нажатия кнопки "Отослать"</p>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form', 'enableClientValidation' => true]); ?>

                <?= $form
                    ->field($model, 'email', $fieldOptions1)
                    ->label(false)
                    ->textInput(['placeholder' => $model->getAttributeLabel('Ваш e-mail')]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отослать', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
