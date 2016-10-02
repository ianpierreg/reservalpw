<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acessorio".
 *
 * @property integer $id
 * @property string $observacao
 * @property integer $reserva_id
 * @property integer $tipo_acessorio_id
 * @property integer $cautela_acessorio_id
 *
 * @property CautelaAcessorio $cautelaAcessorio
 * @property Reserva $reserva
 * @property TipoAcessorio $tipoAcessorio
 */
class Acessorio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acessorio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['observacao', 'reserva_id', 'tipo_acessorio_id', 'cautela_acessorio_id'], 'required'],
            [['observacao'], 'string'],
            [['reserva_id', 'tipo_acessorio_id', 'cautela_acessorio_id'], 'integer'],
            [['cautela_acessorio_id'], 'exist', 'skipOnError' => true, 'targetClass' => CautelaAcessorio::className(), 'targetAttribute' => ['cautela_acessorio_id' => 'id']],
            [['reserva_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reserva::className(), 'targetAttribute' => ['reserva_id' => 'id']],
            [['tipo_acessorio_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoAcessorio::className(), 'targetAttribute' => ['tipo_acessorio_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'observacao' => 'Observacao',
            'reserva_id' => 'Reserva ID',
            'tipo_acessorio_id' => 'Tipo Acessorio ID',
            'cautela_acessorio_id' => 'Cautela Acessorio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCautelaAcessorio()
    {
        return $this->hasOne(CautelaAcessorio::className(), ['id' => 'cautela_acessorio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReserva()
    {
        return $this->hasOne(Reserva::className(), ['id' => 'reserva_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoAcessorio()
    {
        return $this->hasOne(TipoAcessorio::className(), ['id' => 'tipo_acessorio_id']);
    }
}
