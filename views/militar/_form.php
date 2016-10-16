<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Militar */
/* @var $form yii\widgets\ActiveForm */
/* @var $postos */
?>

<div class="militar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'posto')->dropDownList($postos, [
        'prompt' => 'Selecione o posto ou Graduação do Militar ...'
    ]) ?>

    <?= $form->field($model, 'nome_guerra')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
