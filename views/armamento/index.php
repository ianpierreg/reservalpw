<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArmamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Armamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Armamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'num_serie',
            'status',
            'reserva_id',
            'tipo_armamento_id',
            // 'cautela_armamento_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
