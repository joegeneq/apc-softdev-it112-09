<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CPOOfficers */

$this->title = 'Create Cpoofficers';
$this->params['breadcrumbs'][] = ['label' => 'Cpoofficers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpoofficers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
