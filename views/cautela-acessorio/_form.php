<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Acessorio;
use app\models\Militar;

/* @var $this yii\web\View */
/* @var $model app\models\CautelaAcessorio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cautela-acessorio-form panel">


    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>
        <?php if($model->isNewRecord): ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="control-label" for="w1">Acessórios</label>
                    <?= Select2::widget([
                        'name' => 'acessorios',
                        'data' => ArrayHelper::map(Acessorio::findAll(['reserva_id' => Yii::$app->session['reserva'], 'status' => 0]), 'id', 'tipo'),
                        'class' => 'form-group',
                        'options' => [
                            'multiple' => true,
                            'prompt' => 'Selecione acessórios que deseja cautelar...',
                        ],
                    ]); ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'militar_id')->dropDownList(ArrayHelper::map(Militar::find()->all(), 'id', 'nome_guerra'), [
                        'prompt' => 'Selecione o militar ...'
                    ]) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'data_inicio')->widget(DatePicker::classname(),[
                        'name' => 'to_date',
                        'clientOptions' => [
                            'dateFormat' => 'dd/MM/yyyy',
                        ],
                        'options' => [
                            'class' => 'form-control'
                        ],
                    ])?>
                </div>

                <?php $model->data_fim = null ?>
                <div class="col-md-6">
                    <?= $form->field($model, 'data_fim')->widget(DatePicker::classname(),[
                        'name' => 'to_date',
                        'clientOptions' => [
                            'dateFormat' => 'dd/MM/yyyy',
                        ],
                        'options' => [
                            'class' => 'form-control'
                        ],
                    ])?>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="control-label" for="w1">Acessórios</label>
                    <?= Select2::widget([
                        'name' => 'acessorios',
                        'data' => ArrayHelper::map(Acessorio::findAll(['reserva_id' => Yii::$app->session['reserva'], 'status' => 1, 'cautela_acessorio_id' => $model->id]), 'id', 'tipo'),
                        'class' => 'form-group',
                        'options' => [
                            'multiple' => true,
                            'prompt' => 'Selecione Acessorios que deseja entregar...',
                        ],
                    ]); ?>
                </div>

                <div class="col-md-6">
                    <label class="control-label" for="w1">Caso queira estender a data de entrega</label>
                    <?= $form->field($model, 'data_fim')->widget(DatePicker::classname(),[
                        'name' => 'to_date',
                        'clientOptions' => [
                            'dateFormat' => 'dd/MM/yyyy',
                        ],
                        'options' => [
                            'class' => 'form-control'
                        ],
                    ])->label(false)?>
                </div>
            </div>

        <?php endif; ?>





        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
