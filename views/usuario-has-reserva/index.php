<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioHasReservaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuario Has Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-has-reserva-index panel">

    <div class="panel-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuario_id',
            'reserva_id',

            ['class' => 'yii\grid\ActionColumn'],

            [
                'attribute' => 'some_title',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<div>'.$model->id.' and other html-code</div>';
                },
            ],
        ],
    ]); ?>
        </div>
</div>
