<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Personagem */

$this->title = 'Create Personagem';
$this->params['breadcrumbs'][] = ['label' => 'Personagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
