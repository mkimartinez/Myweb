<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Certs */

$this->title = 'Update Certs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Certs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="certs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
