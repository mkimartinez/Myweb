<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Income */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="income-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'amount')->textInput() ?>
    <?= $form->field($model,'date_recieved')->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
