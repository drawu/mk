<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "personagem".
 *
 * @property integer $id
 * @property string $nome
 * @property string $sexo
 * @property string $origem_etnica
 * @property string $local_nascimento
 * @property string $data_nascimento
 * @property string $local_casamento
 * @property string $data_casamento
 * @property string $local_falecimento
 * @property string $data_falecimento
 * @property string $formacao
 * @property string $ocupacoes
 * @property string $titulos
 * @property integer $tipo_id
 * @property string $fontes
 * @property string $observacoes
 *
 * @property Empreendimento[] $empreendimentos
 * @property Tipopersonagem $tipo
 */
class Personagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'sexo', 'tipo_id'], 'required'],
            [['data_nascimento', 'data_casamento', 'data_falecimento'], 'safe'],
            [['tipo_id'], 'integer'],
            [['nome', 'ocupacoes', 'titulos'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 1],
            [['origem_etnica'], 'string', 'max' => 80],
            [['local_nascimento', 'local_casamento', 'local_falecimento'], 'string', 'max' => 100],
            [['formacao'], 'string', 'max' => 50],
            [['fontes', 'observacoes'], 'string', 'max' => 255],
            [['tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tipopersonagem::className(), 'targetAttribute' => ['tipo_id' => 'id']],
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
            'sexo' => 'Sexo',
            'origem_etnica' => 'Origem Etnica',
            'local_nascimento' => 'Local Nascimento',
            'data_nascimento' => 'Data Nascimento',
            'local_casamento' => 'Local Casamento',
            'data_casamento' => 'Data Casamento',
            'local_falecimento' => 'Local Falecimento',
            'data_falecimento' => 'Data Falecimento',
            'formacao' => 'Formacao',
            'ocupacoes' => 'Ocupacoes',
            'titulos' => 'Titulos',
            'tipo_id' => 'Tipo ID',
            'fontes' => 'Fontes',
            'observacoes' => 'Observacoes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpreendimentos()
    {
        return $this->hasMany(Empreendimento::className(), ['socio_fundador_incorporador_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipopersonagem::className(), ['id' => 'tipo_id']);
    }
}
