    <?php
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    ?>
     
    <div class="news-item">
        <h2><?= Html::encode($model->title) ?></h2>

        <div class="row">
        	<?php if($model->picture_path)
        	{
	        	echo "<div class='col-xs-5'>";
	            echo "<img height='auto' width='230px' src=\"uploads/" . HtmlPurifier::process($model->picture_path) . "\" >";
	            echo "</div>";
        	}
            ?>
            <p><?= HtmlPurifier::process($model->content) ?></p>
        </div>
          
           
    </div>