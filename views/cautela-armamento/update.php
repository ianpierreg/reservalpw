<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CautelaArmamento */

$this->title = 'Update Cautela Armamento: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cautela Armamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cautela-armamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
