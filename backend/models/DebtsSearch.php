<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Debts;

/**
 * DebtsSearch represents the model behind the search form about `app\models\Debts`.
 */
class DebtsSearch extends Debts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'amount'], 'integer'],
            [['debt_date', 'person_name', 'current_status', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Debts::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'debt_date' => $this->debt_date,
            'amount' => $this->amount,
        ]);

        $query->andFilterWhere(['like', 'person_name', $this->person_name])
            ->andFilterWhere(['like', 'current_status', $this->current_status])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
