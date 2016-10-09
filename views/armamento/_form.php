<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TipoArmamento;

/* @var $this yii\web\View */
/* @var $model app\models\Armamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="armamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_serie')->textInput(['maxlength' => true]) ?>

    <?php $status = [
        0 => 'Disponível',
        1 => 'Cautelada',
        2 => 'Em Manuntenção',
        3 => 'Desativada'
    ]?>

    <?php if(!$model->isNewRecord): ?>
        <?= $form->field($model, 'status')->dropDownList($status,[
            'prompt' => 'Selecione o estado do armamento ...'
        ]) ?>
    <?php endif; ?>

    <?= $form->field($model, 'tipo_armamento_id')->dropDownList(ArrayHelper::map(TipoArmamento::find()->all(), 'id', 'modelo'), [
        'prompt' => 'Selecione modelo do armamento ...'

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
