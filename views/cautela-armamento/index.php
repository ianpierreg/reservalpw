<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CautelaArmamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cautela Armamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cautela-armamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cautela Armamento', ['create'], ['class' => 'btn btn-success']) ?>
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
