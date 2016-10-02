<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Militar */

$this->title = 'Create Militar';
$this->params['breadcrumbs'][] = ['label' => 'Militars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="militar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
