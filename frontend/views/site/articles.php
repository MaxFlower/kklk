<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Статьи / ККЛК';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="row">
        <div class="col-md-8">
            <div class="container-fluid">
                <h3 class="text-center">Статьи</h3>
                <div class="row">                   
                    <?php
                        foreach ($model as $article) {
                            echo $this->render('//site/shortView', [
                                'article' => $article
                            ]);
                        }
                    ?>
                </div>
            </div>                      
        </div>

        <div class="col-md-4">
            <h3 class="text-center">Фильтр статей:</h3>
            

        </div>
    </div>
</div>
