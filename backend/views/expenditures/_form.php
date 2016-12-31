<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Expenditures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expenditures-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'date')->widget(DatePicker::className(),
    [
   'dateFormat'=>'y-M-d',
    'clientOptions' => [
    'defaultDate' => date('y-M-d'),
    //'format'=>'yyyy-mm-dd'

    ]]) ?>
    

  <!--  <?= $form->field($model,'date')->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?> -->
  

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount_spend')->textInput() ?>
<?= $form->field($model, 'despcription')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    //'language' => 'en_US',

    'clientOptions' => [
        'browser_spellcheck'=>true,
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
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
