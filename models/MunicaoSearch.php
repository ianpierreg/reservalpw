<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Municao;

/**
 * MunicaoSearch represents the model behind the search form about `app\models\Municao`.
 */
class MunicaoSearch extends Municao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reserva_id', 'tipo_municao_id', 'cautela_municao_id'], 'integer'],
            [['observacao'], 'safe'],
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
        $query = Municao::find();

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
            'reserva_id' => $this->reserva_id,
            'tipo_municao_id' => $this->tipo_municao_id,
            'cautela_municao_id' => $this->cautela_municao_id,
        ]);

        $query->andFilterWhere(['like', 'observacao', $this->observacao]);

        return $dataProvider;
    }
}
