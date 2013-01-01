<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "armamento".
 *
 * @property integer $id
 * @property string $num_serie
 * @property integer $status
 * @property integer $reserva_id
 * @property integer $tipo_armamento_id
 * @property integer $cautela_armamento_id
 *
 * @property CautelaArmamento $cautelaArmamento
 * @property Reserva $reserva
 * @property TipoArmamento $tipoArmamento
 * @property string $tipo
 */
class Armamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'armamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_serie', 'status', 'reserva_id', 'tipo_armamento_id'], 'required'],
            [['status', 'reserva_id', 'tipo_armamento_id', 'cautela_armamento_id'], 'integer'],
            [['num_serie'], 'string', 'max' => 45],
            [['cautela_armamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => CautelaArmamento::className(), 'targetAttribute' => ['cautela_armamento_id' => 'id']],
            [['reserva_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reserva::className(), 'targetAttribute' => ['reserva_id' => 'id']],
            [['tipo_armamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoArmamento::className(), 'targetAttribute' => ['tipo_armamento_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num_serie' => 'Num Serie',
            'status' => 'Status',
            'reserva_id' => 'Reserva ID',
            'tipo_armamento_id' => 'Tipo Armamento ID',
            'cautela_armamento_id' => 'Cautela Armamento ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCautelaArmamento()
    {
        return $this->hasOne(CautelaArmamento::className(), ['id' => 'cautela_armamento_id']);
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
    public function getTipoArmamento()
    {
        return $this->hasOne(TipoArmamento::className(), ['id' => 'tipo_armamento_id']);
    }

    public function getTipo()
    {
       return $this->num_serie. "  ----  ". TipoArmamento::findOne($this->tipo_armamento_id)->modelo;
    }
}