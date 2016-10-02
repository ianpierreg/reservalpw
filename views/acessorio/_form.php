<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Acessorio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acessorio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reserva_id')->textInput() ?>

    <?= $form->field($model, 'tipo_acessorio_id')->textInput() ?>

    <?= $form->field($model, 'cautela_acessorio_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
