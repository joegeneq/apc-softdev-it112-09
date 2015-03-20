<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\internship\models\Industryprofessors */

$this->title = 'Create Industryprofessors';
$this->params['breadcrumbs'][] = ['label' => 'Industryprofessors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industryprofessors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
