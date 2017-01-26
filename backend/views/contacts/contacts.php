<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<style type="text/css">
/*div.blog{
	background-color: grey;
	color:white;
	margin: 20px 0 20px 0;
	padding: 20px;
}*/
</style>
<div class="panel panel-default">
    <h3 ><b><?= Html::encode($model->title) ?></b></h3>
<h4> <?= Html::encode($model->phone) ?> </h4>  
    <p class="panel"><?= Html::encode($model->place) ?> </h4>  </p> 

</div>