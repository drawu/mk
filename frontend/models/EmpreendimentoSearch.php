<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Empreendimento;

/**
 * EmpreendimentoSearch represents the model behind the search form about `frontend\models\Empreendimento`.
 */
class EmpreendimentoSearch extends Empreendimento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ano_fundacao', 'socio_fundador_incorporador_id', 'tipo_id', 'empreendimento_chave'], 'integer'],
            [['nome', 'valor_acoes', 'valor_acoes_data', 'ramo_atividade', 'mercados', 'capital_inicial'], 'safe'],
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
        $query = Empreendimento::find();

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
            'ano_fundacao' => $this->ano_fundacao,
            'socio_fundador_incorporador_id' => $this->socio_fundador_incorporador_id,
            'valor_acoes_data' => $this->valor_acoes_data,
            'tipo_id' => $this->tipo_id,
            'empreendimento_chave' => $this->empreendimento_chave,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'valor_acoes', $this->valor_acoes])
            ->andFilterWhere(['like', 'ramo_atividade', $this->ramo_atividade])
            ->andFilterWhere(['like', 'mercados', $this->mercados])
            ->andFilterWhere(['like', 'capital_inicial', $this->capital_inicial]);

        return $dataProvider;
    }
}
