<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CPOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cpoofficers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpoofficers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cpoofficers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userid',
            'firstname',
            'lastname',
            'email:email',
            'password_hash',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
