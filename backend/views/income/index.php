<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incomes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="income-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Income', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
     //   'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
              [

                      [
                    'label'=>'Date',
                    'attribute'=>'date_recieved',
                    'format'=>'date',
                    'contentOptions'=>['class'=>'bg-purple']
                    ],
                    [
                    'label'=>'Amount',
                    'attribute'=>'amount',
                    'format'=>'currency',
                    'contentOptions'=>['class'=>'bg-purple']
                    ],
                    [
                    'label'=>'Date',
                    'attribute'=>'date',
                    'format'=>'date',
                    'contentOptions'=>['class'=>'bg-purple']
                    ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

 