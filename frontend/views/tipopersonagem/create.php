<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Tipopersonagem */

$this->title = 'Create Tipopersonagem';
$this->params['breadcrumbs'][] = ['label' => 'Tipopersonagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipopersonagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
