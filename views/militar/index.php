<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MilitarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Militars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="militar-index panel">

    <div class="panel-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <p>
            <?= Html::a('Cadastrar militar', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'posto',
            'nome_guerra',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
</div>
