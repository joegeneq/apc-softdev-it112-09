<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\management\models\UsermanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'username',
            'firstname',
            'lastname',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            'roles',
            'company_id',
            'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
