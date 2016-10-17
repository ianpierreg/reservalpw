<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoMunicaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Municaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-municao-index panel">

    <div class="panel-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <p>
            <?= Html::a('Cadastrar novo Tipo de Munição', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'calibre',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Ações',
            ],
        ],
    ]); ?>
        </div>
</div>
