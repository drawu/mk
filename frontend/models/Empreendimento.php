<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "empreendimento".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $ano_fundacao
 * @property integer $socio_fundador_incorporador_id
 * @property string $valor_acoes
 * @property string $valor_acoes_data
 * @property integer $tipo_id
 * @property string $ramo_atividade
 * @property string $mercados
 * @property string $capital_inicial
 * @property integer $empreendimento_chave
 *
 * @property Personagem $socioFundadorIncorporador
 * @property Tipoempreendimento $tipo
 */
class Empreendimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empreendimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'tipo_id'], 'required'],
            [['ano_fundacao', 'socio_fundador_incorporador_id', 'tipo_id', 'empreendimento_chave'], 'integer'],
            [['valor_acoes_data'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['valor_acoes', 'mercados', 'capital_inicial'], 'string', 'max' => 255],
            [['ramo_atividade'], 'string', 'max' => 100],
            [['socio_fundador_incorporador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personagem::className(), 'targetAttribute' => ['socio_fundador_incorporador_id' => 'id']],
            [['tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoempreendimento::className(), 'targetAttribute' => ['tipo_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'ano_fundacao' => 'Ano Fundacao',
            'socio_fundador_incorporador_id' => 'Socio Fundador Incorporador ID',
            'valor_acoes' => 'Valor Acoes',
            'valor_acoes_data' => 'Valor Acoes Data',
            'tipo_id' => 'Tipo ID',
            'ramo_atividade' => 'Ramo Atividade',
            'mercados' => 'Mercados',
            'capital_inicial' => 'Capital Inicial',
            'empreendimento_chave' => 'Empreendimento Chave',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocioFundadorIncorporador()
    {
        return $this->hasOne(Personagem::className(), ['id' => 'socio_fundador_incorporador_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipoempreendimento::className(), ['id' => 'tipo_id']);
    }
}
