<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Personagem;

/**
 * PersonagemSearch represents the model behind the search form about `frontend\models\Personagem`.
 */
class PersonagemSearch extends Personagem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tipo_id'], 'integer'],
            [['nome', 'sexo', 'origem_etnica', 'local_nascimento', 'data_nascimento', 'local_casamento', 'data_casamento', 'local_falecimento', 'data_falecimento', 'formacao', 'ocupacoes', 'titulos', 'fontes', 'observacoes'], 'safe'],
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
        $query = Personagem::find();

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
            'data_nascimento' => $this->data_nascimento,
            'data_casamento' => $this->data_casamento,
            'data_falecimento' => $this->data_falecimento,
            'tipo_id' => $this->tipo_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'origem_etnica', $this->origem_etnica])
            ->andFilterWhere(['like', 'local_nascimento', $this->local_nascimento])
            ->andFilterWhere(['like', 'local_casamento', $this->local_casamento])
            ->andFilterWhere(['like', 'local_falecimento', $this->local_falecimento])
            ->andFilterWhere(['like', 'formacao', $this->formacao])
            ->andFilterWhere(['like', 'ocupacoes', $this->ocupacoes])
            ->andFilterWhere(['like', 'titulos', $this->titulos])
            ->andFilterWhere(['like', 'fontes', $this->fontes])
            ->andFilterWhere(['like', 'observacoes', $this->observacoes]);

        return $dataProvider;
    }
}
