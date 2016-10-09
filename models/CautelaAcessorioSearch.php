<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CautelaAcessorio;

/**
 * CautelaAcessorioSearch represents the model behind the search form about `app\models\CautelaAcessorio`.
 */
class CautelaAcessorioSearch extends CautelaAcessorio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'militar_id', 'usuario_id'], 'integer'],
            [['quantidade', 'data_inicio', 'data_fim'], 'safe'],
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
        $query = CautelaAcessorio::find();

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
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim,
            'militar_id' => $this->militar_id,
            'usuario_id' => $this->usuario_id,
        ]);

        $query->andFilterWhere(['like', 'quantidade', $this->quantidade]);

        return $dataProvider;
    }
}
