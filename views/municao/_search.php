<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MunicaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'observacao') ?>

    <?= $form->field($model, 'reserva_id') ?>

    <?= $form->field($model, 'tipo_municao_id') ?>

    <?= $form->field($model, 'cautela_municao_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
