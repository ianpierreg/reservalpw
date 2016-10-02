<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CautelaMunicao */

$this->title = 'Create Cautela Municao';
$this->params['breadcrumbs'][] = ['label' => 'Cautela Municaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cautela-municao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
