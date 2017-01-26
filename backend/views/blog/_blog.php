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
    <h3 class="text-center"><b><?= Html::encode($model->title) ?></b></h3>
<h4> <?= Html::encode($model->time_published) ?> </h4>  
    <p class="panel"><?= HtmlPurifier::process(substr($model->content,0,200)) ?></p> 
    <p><?= Html::a('Readmore',['view','id'=>$model->id],['class'=>'btn btn-success'])?></p>

</div>