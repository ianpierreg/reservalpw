<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoAcessorio */

$this->title = 'Create Tipo Acessorio';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Acessorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-acessorio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
