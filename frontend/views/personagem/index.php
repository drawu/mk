<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersonagemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personagems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personagem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Personagem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'sexo',
            'origem_etnica',
            'local_nascimento',
            // 'data_nascimento',
            // 'local_casamento',
            // 'data_casamento',
            // 'local_falecimento',
            // 'data_falecimento',
            // 'formacao',
            // 'ocupacoes',
            // 'titulos',
            // 'tipo_id',
            // 'fontes',
            // 'observacoes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
