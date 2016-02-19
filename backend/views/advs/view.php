<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advs */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Advs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'anons:ntext',
            'content:ntext',
            'created_at',
            'picture_path',
            'author_id',
            'publish_status',
            'category_id',
        ],
    ]) ?>

</div>
