<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\management\models\Userman */

$this->title = 'Update User: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Usermen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
