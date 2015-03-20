<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\Industrypartners\models\IndustryPartners */

$this->title = 'Update Industry Partners: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Industry Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="industry-partners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
