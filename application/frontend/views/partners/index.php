<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PartnersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Partners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-index">

    <h1>Industry Partners</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (Yii::$app->user->isGuest == false) {
            echo Html::a('Create Partners', ['create'], ['class' => 'btn btn-success']);
        } ?>
    </p>

    <?php if (Yii::$app->user->isGuest == false) {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],

//                'id',
                'company_name',
                [ 'label' => 'Address', 'value' =>'company_address'],
                [ 'label' => 'Contact No.', 'value' =>'company_contactnum'],
                [ 'label' => 'Company Profile', 'value' =>'company_description'],
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    }else{
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],

//                'id',
                'company_name',
                [ 'label' => 'Address', 'value' =>'company_address'],
                [ 'label' => 'Contact No.', 'value' =>'company_contactnum'],
                [ 'label' => 'Company Profile', 'value' =>'company_description'],
            ],
            'rowOptions'   => function ($model, $key, $index, $grid) {
                return ['data-id' => $model->id];
            },
        ]);
    } 
    ?>

    <?php
    if (Yii::$app->user->isGuest) {
        $this->registerJs("

        $('td').click(function (e) {
        var id = $(this).closest('tr').data('id');
        if(e.target == this)
            location.href = '" . Yii::$app->homeUrl . "?r=partners/view&id=' + id;
        });

        ");
    }
    ?>
</div>
