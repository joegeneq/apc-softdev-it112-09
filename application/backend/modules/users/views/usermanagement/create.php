<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\users\models\Usermanagement */

$this->title = 'Create Usermanagement';
$this->params['breadcrumbs'][] = ['label' => 'Usermanagements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermanagement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
