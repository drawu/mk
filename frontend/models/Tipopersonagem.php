<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipopersonagem".
 *
 * @property integer $id
 * @property string $nome
 *
 * @property Personagem[] $personagems
 */
class Tipopersonagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipopersonagem';
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
    public function getPersonagems()
    {
        return $this->hasMany(Personagem::className(), ['tipo_id' => 'id']);
    }
}
