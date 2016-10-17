<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CautelaArmamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cautela Armamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cautela-armamento-index panel">

    <div class="panel-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <p>
            <?= Html::a('Cautelar Armamento', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'militar.nome_guerra',
            'quantidade',
            'data_inicio',
            'data_fim',

            // 'usuario_id',

            ['class' => 'yii\grid\ActionColumn',
             'header' => 'Ações'
            ],
        ],
    ]); ?>
        </div>
</div>
