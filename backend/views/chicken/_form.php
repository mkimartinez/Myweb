<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Chicken */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chicken-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model,'date')->widget(DatePicker::className(),
    [
   'dateFormat'=>'y-M-d',
    'clientOptions' => [
    'defaultDate' => date('y-M-d'),
    //'format'=>'yyyy-mm-dd'

    ]]) ?>
    <?= $form->field($model, 'amount_invested')->textInput() ?>

   <?= $form->field($model, 'description')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    //'language' => 'en_US',

    'clientOptions' => [
        'browser_spellcheck'=>true,
        'plugins' => [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "code | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
