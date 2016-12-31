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
    <!-- <code><?php echo dirname(__DIR__)?></code>
    <code><?php echo(Yii::$app->name)?></code>
     <code><?php echo(Yii::$app->timeZone)?></code>
     <code><?php echo(\Yii::$app->params['timeZone'])?></code> -->
     
    <p>
        <?= Html::a('Create Debts', ['create'], ['class' => 'btn btn-success pull-right']) ?>
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
                                 return['class'=>'bg-red'];
                            }
                        },
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            
            [
            'label'=>'Date',
            'attribute'=>'debt_date',
            'format'=>'date',
            
            ],
            ['attribute'=>'person_name',
            'label'=>'Debtor',
            'contentOptions'=>['style'=>'width:20px']],
            
            ['attribute'=>'amount',
            'label'=>'Amount owed (RMB)',
            'format'=>'currency',
            ],

            'current_status',
        

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
