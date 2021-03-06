<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Municao */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Municaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'observacao:ntext',
            'reserva_id',
            'tipo_municao_id',
            'cautela_municao_id',
        ],
    ]) ?>

</div>
