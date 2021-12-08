<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TipoEmpreendimento */

$this->title = 'Create Tipo Empreendimento';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Empreendimentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-empreendimento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
