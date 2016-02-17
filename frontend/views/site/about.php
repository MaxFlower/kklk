<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'О нас / ККЛК';
?>
<div class="site-about">
    <div class="row">
    	<div class="col-md-6">
    		<div class="container-fluid">
    			<h3 class="text-center">Наша миссия</h3>
    			<div class="row">	    			
	    			<div class="col-xs-2">
	    				<img src="img/thumbnail2.jpg">
	    			</div>
	    			<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
	    		</div>
    		</div>    		    		
    	</div>

    	<div class="col-md-6">
    		<h3 class="text-center">Свяжитесь с нами:</h3>
    		<div class="row">
		        <div class="col-md-8 col-md-offset-1">
		            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

		                <?= $form->field($model, 'name')->label('Ваше имя') ?>

		                <?= $form->field($model, 'email')->label('Ваш e-mail') ?>

		                <?= $form->field($model, 'subject')->label('Тема сообщения') ?>

		                <?= $form->field($model, 'body')->label('Содержание')->textArea(['rows' => 6]) ?>

		                <?= $form->field($model, 'verifyCode')->label('Введите код')->widget(Captcha::className(), [
		                    'template' => '<div class="row"><div class="col-md-5">{image}</div><div class="col-md-5">{input}</div></div>',
		                ]) ?>

		                <div class="form-group">
		                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
		                </div>

		            <?php ActiveForm::end(); ?>
		        </div>
		    </div>

    	</div>
    </div>
    

    
</div>
