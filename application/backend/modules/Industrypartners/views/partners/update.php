<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\Industrypartners\models\IndustryPartners */

$this->title = 'Update' . ' ' . $model->company_name;
$this->params['breadcrumbs'][] = ['label' => 'Industry Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->company_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'update';
?>
<div class="industry-partners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
