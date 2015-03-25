<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\Industrypartners\models\Hr */

$this->title = 'Create Hr';
$this->params['breadcrumbs'][] = ['label' => 'Hrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
