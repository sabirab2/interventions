<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Machines;

/**
 * MachinesSearch represents the model behind the search form about `app\models\Machines`.
 */
class MachinesSearch extends Machines
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_deleted'], 'integer'],
            [['name', 's_n', 'collaborator_name', 'adr_mac_lan', 'adr_ip', 'created_at', 'updated_at'], 'safe'],
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
        $query = Machines::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 's_n', $this->s_n])
            ->andFilterWhere(['like', 'collaborator_name', $this->collaborator_name])
            ->andFilterWhere(['like', 'adr_mac_lan', $this->adr_mac_lan])
            ->andFilterWhere(['like', 'adr_ip', $this->adr_ip]);

        return $dataProvider;
    }
}
