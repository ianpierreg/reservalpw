<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_has_reserva".
 *
 * @property integer $usuario_id
 * @property integer $reserva_id
 *
 * @property User $usuario
 * @property Reserva $reserva
 */
class UsuarioHasReserva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario_has_reserva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id', 'reserva_id'], 'required'],
            [['usuario_id', 'reserva_id'], 'integer'],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['usuario_id' => 'id']],
            [['reserva_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reserva::className(), 'targetAttribute' => ['reserva_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'reserva_id' => 'Reserva ID',
        ];
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
    public function getReserva()
    {
        return $this->hasOne(Reserva::className(), ['id' => 'reserva_id']);
    }
}
