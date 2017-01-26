<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Appointments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>


    <?= $form->field($model,'date')->widget(DatePicker::className(),
    [
   'dateFormat'=>'y-M-d',
    'clientOptions' => [
    'defaultDate' => date('y-M-d'),
    //'format'=>'yyyy-mm-dd'

    ]]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
