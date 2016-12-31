<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chicken */

$this->title = 'Create Chicken';
$this->params['breadcrumbs'][] = ['label' => 'Chickens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chicken-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
