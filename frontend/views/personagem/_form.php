<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Personagem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personagem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'origem_etnica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'local_nascimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nascimento')->textInput() ?>

    <?= $form->field($model, 'local_casamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_casamento')->textInput() ?>

    <?= $form->field($model, 'local_falecimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_falecimento')->textInput() ?>

    <?= $form->field($model, 'formacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ocupacoes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_id')->textInput() ?>

    <?= $form->field($model, 'fontes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacoes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
