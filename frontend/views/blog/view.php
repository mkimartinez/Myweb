<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">

<p class="lead"><?= Html::encode($this->title) ?></p>
  <p><?php echo $model->content;?></p>
  <span><?php echo $model->time_published;?></span>

</div>
