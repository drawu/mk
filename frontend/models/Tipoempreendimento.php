<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipoempreendimento".
 *
 * @property integer $id
 * @property string $nome
 *
 * @property Empreendimento[] $empreendimentos
 */
class Tipoempreendimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoempreendimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 200],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpreendimentos()
    {
        return $this->hasMany(Empreendimento::className(), ['tipo_id' => 'id']);
    }
}
