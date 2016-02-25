<?php

use yii\widgets\ListView;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $this yii\widgets\ListView */
/* @var $this yii\widgets\ActiveForm */

$this->title = 'Статьи / ККЛК';

?>


    
<div class="site-article">
    <div class="row">
        <div class="col-md-8">
            <div class="container-fluid">
                <h3 class="text-center">Статьи</h3>
                                                    
                    <?php                                                 
                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_shortView',
                        ]);
                    ?> 
                
            </div>                      
        </div>

        <div class="col-md-4">
            <h3 class="text-center">Фильтр</h3>
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <?php echo $this->render('_filter', ['model' => $searchModel]); ?>
                </div>
            </div>

        </div>
    </div>
    

    
</div>
