<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Debts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="debts-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model,'debt_date')->widget(DatePicker::className(),
    [
   'dateFormat'=>'y-M-d',
    'clientOptions' => [
    'defaultDate' => date('y-M-d'),
    //'format'=>'yyyy-mm-dd'

    ]]) ?>

    <?= $form->field($model, 'person_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>
    <p>Current status:<br/>
    <select name="current status" required>
        <option value="" disabled selected hidden>please choose the current status of the debt</option>
          <option value="0"> not paid</option>
            <option value="1">paid</option>
    </select></p>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
