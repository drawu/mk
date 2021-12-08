<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersonagemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personagem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'origem_etnica') ?>

    <?= $form->field($model, 'local_nascimento') ?>

    <?php // echo $form->field($model, 'data_nascimento') ?>

    <?php // echo $form->field($model, 'local_casamento') ?>

    <?php // echo $form->field($model, 'data_casamento') ?>

    <?php // echo $form->field($model, 'local_falecimento') ?>

    <?php // echo $form->field($model, 'data_falecimento') ?>

    <?php // echo $form->field($model, 'formacao') ?>

    <?php // echo $form->field($model, 'ocupacoes') ?>

    <?php // echo $form->field($model, 'titulos') ?>

    <?php // echo $form->field($model, 'tipo_id') ?>

    <?php // echo $form->field($model, 'fontes') ?>

    <?php // echo $form->field($model, 'observacoes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
