<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\internship\models\Industryprofessors */

$this->title = 'Update Industryprofessors: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Industryprofessors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="industryprofessors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
