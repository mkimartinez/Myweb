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
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'date',
            'place',
            'amount_spend',
            'despcription:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
