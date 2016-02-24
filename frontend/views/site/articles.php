<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

    
     
    use common\models\Articles;
    use yii\widgets\ListView;
    use yii\data\ActiveDataProvider;
     
    $dataProvider = new ActiveDataProvider([
        'query' => Articles::find(),
        'pagination' => [
            'pageSize' => 2,
        ],
    ]);
     
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_shortView',
    ]);

?>