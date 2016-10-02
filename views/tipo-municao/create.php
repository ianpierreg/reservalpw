<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoMunicao */

$this->title = 'Create Tipo Municao';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Municaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-municao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
