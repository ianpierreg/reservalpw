<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioHasReserva */

$this->title = $model->usuario_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Has Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-has-reserva-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'usuario_id' => $model->usuario_id, 'reserva_id' => $model->reserva_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'usuario_id' => $model->usuario_id, 'reserva_id' => $model->reserva_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usuario_id',
            'reserva_id',
        ],
    ]) ?>

</div>
