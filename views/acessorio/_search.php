<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcessorioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acessorio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'observacao') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'reserva_id') ?>

    <?= $form->field($model, 'tipo_acessorio_id') ?>

    <?php // echo $form->field($model, 'cautela_acessorio_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
