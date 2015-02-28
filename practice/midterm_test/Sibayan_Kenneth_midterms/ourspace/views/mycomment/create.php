<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MyComment */

$this->title = 'Create My Comment';
$this->params['breadcrumbs'][] = ['label' => 'My Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
