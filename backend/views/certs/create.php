<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Certs */

$this->title = 'Create Certs';
$this->params['breadcrumbs'][] = ['label' => 'Certs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
