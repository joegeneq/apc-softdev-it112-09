<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Partnerhr */

$this->title = 'Update Partnerhr: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Partnerhrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partnerhr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
