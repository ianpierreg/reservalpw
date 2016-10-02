<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoAcessorioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Acessorios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-acessorio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Acessorio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'quantidade',
            'descricao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
