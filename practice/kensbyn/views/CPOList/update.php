<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CPOOfficers */

$this->title = 'Update Cpoofficers: ' . ' ' . $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Cpoofficers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userid, 'url' => ['view', 'id' => $model->userid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cpoofficers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
