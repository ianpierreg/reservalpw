<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoArmamento */

$this->title = 'Create Tipo Armamento';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Armamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-armamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
