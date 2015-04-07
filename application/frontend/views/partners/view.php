<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Partners */

$this->title = $model->company_name;
$this->params['breadcrumbs'][] = ['label' => 'Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="partners-view">

 <?php
        if ($model->company_logo == null) {
            echo '<img src=\'' . Yii::$app->homeUrl . 'backend/web/image/company_images/company-logo.png\' width=\'125px\' height=\'125px\' style=\'width:10%;height:10%;float:right\' border="0" alt="Null">';
            echo '<h1>'. $this->title .'</h1>';
        }else{
            echo '<img src=\'' . Yii::$app->homeUrl . 'backend/web/' . $model->company_logo . '\' width=\'125px\' height=\'125px\' style=\'width:10%;height:10%;float:right\' border="0" alt="Null">';
            echo '<h1>'. $this->title .'</h1>';
        }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'company_name',
            'company_address',
            ['label'=>'Contact No.', 'value' => $model->company_contactnum],
            'company_description:ntext',
        ],
    ]) ?>

</div>
