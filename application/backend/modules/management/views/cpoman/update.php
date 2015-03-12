<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\management\models\Careerofficer */

$this->title = 'Update Careerofficer: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Careerofficers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="careerofficer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
