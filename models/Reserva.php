<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property integer $id
 * @property string $descricao
 *
 * @property Acessorio[] $acessorios
 * @property Armamento[] $armamentos
 * @property Municao[] $municaos
 * @property UsuarioHasReserva[] $usuarioHasReservas
 * @property User[] $usuarios
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcessorios()
    {
        return $this->hasMany(Acessorio::className(), ['reserva_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArmamentos()
    {
        return $this->hasMany(Armamento::className(), ['reserva_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicaos()
    {
        return $this->hasMany(Municao::className(), ['reserva_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioHasReservas()
    {
        return $this->hasMany(UsuarioHasReserva::className(), ['reserva_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(User::className(), ['id' => 'usuario_id'])->viaTable('usuario_has_reserva', ['reserva_id' => 'id']);
    }
}
