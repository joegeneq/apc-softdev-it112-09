<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\Industrypartners\models\HrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Industry Partner HRs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            'username',
            'firstname',
            'lastname',
            'email:email',
            'contact_num',
            'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
