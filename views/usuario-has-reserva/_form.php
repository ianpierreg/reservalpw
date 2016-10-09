<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Reserva;
use webvimark\modules\UserManagement\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioHasReserva */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-has-reserva-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'username'),[

    ]) ?>

    <?= $form->field($model, 'reserva_id')->dropDownList(ArrayHelper::map(Reserva::find()->all(), 'id', 'descricao'), [

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
