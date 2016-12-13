<?php
namespace backend\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Calendar;
class CalendarSearch extends Calendar
{
    public function search($params)
    {
        $query = Calendar::find()->where(['user_id'=>Yii::$app->user->getId()]);

        $dataProvider = new ActiveDataProvider([
             'query' => $query,
             'pagination' => ['pageSize' => 30],
             'sort'=> ['defaultOrder' => ['start'=>SORT_DESC]]
         ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->calories,
            'val' => $this->peak_heartrate,
        ]);

        return $dataProvider;
    }
}