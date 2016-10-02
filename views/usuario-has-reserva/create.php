<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsuarioHasReserva */

$this->title = 'Create Usuario Has Reserva';
$this->params['breadcrumbs'][] = ['label' => 'Usuario Has Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-has-reserva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
