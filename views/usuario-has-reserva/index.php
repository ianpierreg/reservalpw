<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioHasReservaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuario Has Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-has-reserva-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usuario Has Reserva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuario_id',
            'reserva_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
