<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\management\models\Careerofficer */

$this->title = 'Create Careerofficer';
$this->params['breadcrumbs'][] = ['label' => 'Careerofficers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careerofficer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
