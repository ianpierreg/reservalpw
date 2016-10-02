<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_armamento".
 *
 * @property integer $id
 * @property integer $quantidade
 * @property string $modelo
 * @property string $fabricante
 *
 * @property Armamento[] $armamentos
 */
class TipoArmamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_armamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantidade'], 'integer'],
            [['modelo', 'fabricante'], 'string', 'max' => 70],
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
            'modelo' => 'Modelo',
            'fabricante' => 'Fabricante',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArmamentos()
    {
        return $this->hasMany(Armamento::className(), ['tipo_armamento_id' => 'id']);
    }
}
