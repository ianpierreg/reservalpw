<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AcessorioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acessorios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acessorio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acessorio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'observacao:ntext',
            'reserva_id',
            'tipo_acessorio_id',
            'cautela_acessorio_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
