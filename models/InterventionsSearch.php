<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Interventions;

/**
 * InterventionsSearch represents the model behind the search form about `app\models\Interventions`.
 */
class InterventionsSearch extends Interventions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'correspondant_id', 'lieu_id', 'machine_id', 'is_deleted'], 'integer'],
            [['name', 'code', 'date_intervention', 'created_at', 'updated_at'], 'safe'],
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
        $query = Interventions::find();

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
            'date_intervention' => $this->date_intervention,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'type_id' => $this->type_id,
            'correspondant_id' => $this->correspondant_id,
            'lieu_id' => $this->lieu_id,
            'machine_id' => $this->machine_id,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
