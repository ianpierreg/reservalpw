<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CautelaArmamento */

$this->title = 'Create Cautela Armamento';
$this->params['breadcrumbs'][] = ['label' => 'Cautela Armamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cautela-armamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
