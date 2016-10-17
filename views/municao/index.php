<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MunicaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Municaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municao-index panel">

    <div class="panel-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <p>
            <?= Html::a('Cadastrar Munição', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'observacao:ntext',
            'status',
            'reserva_id',
            'tipo_municao_id',
            // 'cautela_municao_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
</div>
