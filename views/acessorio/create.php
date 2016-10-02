<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Acessorio */

$this->title = 'Create Acessorio';
$this->params['breadcrumbs'][] = ['label' => 'Acessorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acessorio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
