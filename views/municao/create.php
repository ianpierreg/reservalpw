<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Municao */

$this->title = 'Create Municao';
$this->params['breadcrumbs'][] = ['label' => 'Municaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
