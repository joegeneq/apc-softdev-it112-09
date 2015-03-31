<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cpofficer */

$this->title = 'Create Cpofficer';
$this->params['breadcrumbs'][] = ['label' => 'Cpofficers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpofficer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
