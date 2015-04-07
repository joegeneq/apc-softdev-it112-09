<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\users\models\Usermanagement */

if($model->id == Yii::$app->user->identity->id){
$this->title = 'Update Account';
$this->params['breadcrumbs'][] = ['label' => 'My Account', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

}else{
$this->title = 'Update:' . ' ' . $model->username;	
$this->params['breadcrumbs'][] = ['label' => 'Usermanagements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
}

?>
<div class="usermanagement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
