<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="blog">
    <h3><?= Html::encode($model->title) ?></h3>

    <p><?= HtmlPurifier::process(substr($model->content,0,100)) ?>... </p> 
    <p><?= Html::a('Readmore',['view','id'=>$model->id],['class'=>'btn btn-success'])?></p>  
</div>