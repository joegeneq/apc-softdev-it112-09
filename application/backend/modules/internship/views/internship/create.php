<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\internship\models\Internship */

$this->title = 'Create Internship';
$this->params['breadcrumbs'][] = ['label' => 'Internships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="internship-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
