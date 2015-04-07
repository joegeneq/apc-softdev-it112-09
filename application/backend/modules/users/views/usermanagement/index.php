<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\users\models\UsermanagementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermanagement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            //'id',
            ['label' => 'Username','value' => 'username', 'attribute' => 'username'],
            'firstname',
            'lastname',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            // 'status',
            // ['label' =>'Date Registered','value' => 'created_at', 'format' => 'datetime'],
            // 'updated_at:datetime',

        ],
    ]); ?>

</div>
