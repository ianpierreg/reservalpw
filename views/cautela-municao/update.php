<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CautelaMunicao */

$this->title = 'Update Cautela Municao: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cautela Municaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cautela-municao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
