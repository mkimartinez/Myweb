<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DebtsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Debts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Debts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'rowOptions'=>function ($data)
                        {
                            if ($data->current_status === "paid") {
                                return['class'=>'bg-green'];
                            }
                            elseif ($data->current_status === "not paid") {
                                 return['class'=>'bg-purple'];
                            }
                        },
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            
            [
            'label'=>'Date',
            'attribute'=>'debt_date',
            'format'=>'date',
            'contentOptions'=>['class'=>'bg-purple']
            //'contentOptions'=>['style'=>'background-color:bg-purple;width:10px;']
            ],
            ['attribute'=>'person_name',
            'label'=>'Customer',
            'contentOptions'=>['style'=>'width:20px']],
            
            ['attribute'=>'amount',
            'label'=>'Amount owed (RMB)',
            'format'=>'currency',
            'contentOptions'=>['class'=>'bg-maroon']
            ],

            //'current_status',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
