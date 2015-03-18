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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    </p>

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
