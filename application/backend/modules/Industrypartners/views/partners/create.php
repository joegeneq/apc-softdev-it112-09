<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\Industrypartners\models\IndustryPartners */

$model->author = Yii::$app->user->identity->id;
$this->title = 'Add Industry Partners';
$this->params['breadcrumbs'][] = ['label' => 'Industry Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industry-partners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
