<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioHasReserva */

$this->title = 'Update Usuario Has Reserva: ' . $model->usuario_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Has Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuario_id, 'url' => ['view', 'usuario_id' => $model->usuario_id, 'reserva_id' => $model->reserva_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-has-reserva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
