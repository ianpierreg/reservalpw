<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TipoMunicao;

/* @var $this yii\web\View */
/* @var $model app\models\Municao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>


    <?php $status = [
        0 => 'Disponível',
        1 => 'Cautelada',
    ]?>


    <?= $form->field($model, 'tipo_acessorio_id')->dropDownList(ArrayHelper::map(TipoMunicao::find()->all(), 'id', 'calibre'), [
        'prompt' => 'Selecione modelo do armamento ...'

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
