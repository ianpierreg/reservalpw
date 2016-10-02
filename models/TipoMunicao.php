<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_municao".
 *
 * @property integer $id
 * @property string $calibre
 * @property integer $quantidade
 *
 * @property Municao[] $municaos
 */
class TipoMunicao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_municao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['calibre', 'quantidade'], 'required'],
            [['quantidade'], 'integer'],
            [['calibre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'calibre' => 'Calibre',
            'quantidade' => 'Quantidade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicaos()
    {
        return $this->hasMany(Municao::className(), ['tipo_municao_id' => 'id']);
    }
}
