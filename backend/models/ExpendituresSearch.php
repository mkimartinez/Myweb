<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Expenditures;

/**
 * ExpendituresSearch represents the model behind the search form about `app\models\Expenditures`.
 */
class ExpendituresSearch extends Expenditures
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'amount_spend'], 'integer'],
            [['date', 'place', 'despcription'], 'safe'],
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
        $query = Expenditures::find();

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
            'date' => $this->date,
            'amount_spend' => $this->amount_spend,
        ]);

        $query->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'despcription', $this->despcription]);

        return $dataProvider;
    }
}
