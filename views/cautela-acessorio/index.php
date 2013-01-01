<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CautelaAcessorioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cautela Acessorios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cautela-acessorio-index panel">

    <div class="panel-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <p>
            <?= Html::a('Cautelar Acessório', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'quantidade',
            'data_inicio',
            'data_fim',
            'militar_id',
            // 'usuario_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
</div>