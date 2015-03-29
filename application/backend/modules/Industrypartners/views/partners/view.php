<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\Industrypartners\models\IndustryPartners */

$this->title = $model->company_name;
$this->params['breadcrumbs'][] = ['label' => 'Industry Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industry-partners-view">

    <?php
        if ($model->company_logo == null) {
            echo '<h1>'. $this->title .'</h1>';
            echo '<img src=\'../../image/company_images/company-logo.png\' width=\'125px\' height=\'125px\' style=\'width:10%;height:10%\' border="0" alt="Null">';

        }else{
            echo '<h1>'. $this->title .'</h1>';
            echo '<img src=\'../../'. $model->company_logo . '\' width=\'125px\' height=\'125px\' style=\'width:100%;\' border="0" alt="Null">';
        }
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'company_name',
            'company_address',
            ['label' => 'Contact Number','value' => 'company_contactnum'],
            'company_description:ntext',
        ],
    ]) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
