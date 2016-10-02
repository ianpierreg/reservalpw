<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "militar".
 *
 * @property integer $id
 * @property integer $posto
 * @property string $nome_guerra
 *
 * @property CautelaAcessorio[] $cautelaAcessorios
 * @property CautelaArmamento[] $cautelaArmamentos
 * @property CautelaMunicao[] $cautelaMunicaos
 * @property Usuario[] $usuarios
 */
class Militar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'militar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['posto', 'nome_guerra'], 'required'],
            [['posto'], 'integer'],
            [['nome_guerra'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posto' => 'Posto',
            'nome_guerra' => 'Nome Guerra',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCautelaAcessorios()
    {
        return $this->hasMany(CautelaAcessorio::className(), ['militar_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCautelaArmamentos()
    {
        return $this->hasMany(CautelaArmamento::className(), ['militar_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCautelaMunicaos()
    {
        return $this->hasMany(CautelaMunicao::className(), ['militar_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['militar_id' => 'id']);
    }
}
