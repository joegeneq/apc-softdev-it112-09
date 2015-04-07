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
    </p>

    <?php if (Yii::$app->user->isGuest == false) {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],
				['class' => 'yii\grid\ActionColumn','template'=>'{view}'],		
//                'id',
                'company_name',
                [ 'label' => 'Address', 'value' =>'company_address'],
                [ 'label' => 'Contact No.', 'value' =>'company_contactnum'],
                [ 'label' => 'Company Profile', 'value' =>'company_description'],
						
            ],
        ]);
    }else{
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],
				['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
//                'id',
                'company_name',
                [ 'label' => 'Address', 'value' =>'company_address'],
                [ 'label' => 'Contact No.', 'value' =>'company_contactnum'],
                [ 'label' => 'Company Profile', 'value' =>'company_description'],
            ],
        ]);
    } 
    ?>
</div>
