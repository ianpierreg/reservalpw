<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Armamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="armamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reserva_id')->textInput() ?>

    <?= $form->field($model, 'tipo_armamento_id')->textInput() ?>

    <?= $form->field($model, 'cautela_armamento_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
