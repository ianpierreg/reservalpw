<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TipoAcessorio;

/* @var $this yii\web\View */
/* @var $model app\models\Acessorio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acessorio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <?php $status = [
        0 => 'Disponível',
        1 => 'Cautelado',
        2 => 'Em Manuntenção',
        3 => 'Desativada'
    ]?>

    <?php if(!$model->isNewRecord): ?>
        <?= $form->field($model, 'status')->dropDownList($status, [
            'prompt' => 'Selecione o estado do acessório ...'
        ]) ?>
    <?php endif; ?>

    <?= $form->field($model, 'tipo_acessorio_id')->dropDownList(ArrayHelper::map(TipoAcessorio::find()->all(), 'id', 'descricao'), [
        'prompt' => 'Selecione tipo do acessório ...'

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
