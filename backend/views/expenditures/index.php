<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\tinymce\TinyMce;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ExpendituresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expenditures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expenditures-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Expenditures', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            [
            'label'=>'Date',
            'attribute'=>'date',
            'format'=>'date',
            'contentOptions'=>['class'=>'bg-purple']
            ],
             [
            'label'=>'Place Of expenditure',
            'attribute'=>'place',
            'format'=>'ntext',
            'contentOptions'=>['class'=>'bg-green']
            ],
          
            [
            'label'=>'Amount spend(RMB)',
            'attribute'=>'amount_spend',
            'format'=>'currency',
            'contentOptions'=>['class'=>'bg-blue']
            ],
            [
            'label'=>'Details',
            'attribute'=>'despcription',
            'format'=>'html',
            'contentOptions'=>['class'=>'bg-purple']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
</div>
