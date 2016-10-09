<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municao".
 *
 * @property integer $id
 * @property string $observacao
 * @property integer $status
 * @property integer $reserva_id
 * @property integer $tipo_municao_id
 * @property integer $cautela_municao_id
 *
 * @property CautelaMunicao $cautelaMunicao
 * @property Reserva $reserva
 * @property TipoMunicao $tipoMunicao
 */
class Municao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['observacao'], 'string'],
            [['status', 'reserva_id', 'tipo_municao_id'], 'required'],
            [['status', 'reserva_id', 'tipo_municao_id', 'cautela_municao_id'], 'integer'],
            [['cautela_municao_id'], 'exist', 'skipOnError' => true, 'targetClass' => CautelaMunicao::className(), 'targetAttribute' => ['cautela_municao_id' => 'id']],
            [['reserva_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reserva::className(), 'targetAttribute' => ['reserva_id' => 'id']],
            [['tipo_municao_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoMunicao::className(), 'targetAttribute' => ['tipo_municao_id' => 'id']],
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
            'status' => 'Status',
            'reserva_id' => 'Reserva ID',
            'tipo_municao_id' => 'Tipo Municao ID',
            'cautela_municao_id' => 'Cautela Municao ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCautelaMunicao()
    {
        return $this->hasOne(CautelaMunicao::className(), ['id' => 'cautela_municao_id']);
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
    public function getTipoMunicao()
    {
        return $this->hasOne(TipoMunicao::className(), ['id' => 'tipo_municao_id']);
    }
}
