<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_acessorio".
 *
 * @property integer $id

 * @property string $descricao
 *
 * @property Acessorio[] $acessorios
 */
class TipoAcessorio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_acessorio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
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
        return $this->hasMany(Acessorio::className(), ['tipo_acessorio_id' => 'id']);
    }
}
