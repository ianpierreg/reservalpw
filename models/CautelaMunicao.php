<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cautela_municao".
 *
 * @property integer $id
 * @property string $quantidade
 * @property string $data_inicio
 * @property string $data_fim
 * @property integer $militar_id
 * @property integer $usuario_id
 *
 * @property Militar $militar
 * @property User $usuario
 * @property Municao[] $municaos
 */
class CautelaMunicao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cautela_municao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantidade', 'data_inicio', 'data_fim', 'militar_id', 'usuario_id'], 'required'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['militar_id', 'usuario_id'], 'integer'],
            [['quantidade'], 'string', 'max' => 45],
            [['militar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Militar::className(), 'targetAttribute' => ['militar_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantidade' => 'Quantidade',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'militar_id' => 'Militar ID',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitar()
    {
        return $this->hasOne(Militar::className(), ['id' => 'militar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(User::className(), ['id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicaos()
    {
        return $this->hasMany(Municao::className(), ['cautela_municao_id' => 'id']);
    }
}
