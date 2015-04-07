<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\users\models\Usermanagement */
if($model->id == Yii::$app->user->identity->id){
$this->title = 'My Account';
$this->params['breadcrumbs'][] = 'My Account';
}else{
$this->title = $model->lastname.', '.$model->firstname;
$this->params['breadcrumbs'][] = ['label' => 'Site Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="usermanagement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this user?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'firstname',
            'lastname',
            'username',
//            'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            ['label'=> 'User role',
             'attribute' =>'roles',
              'value' =>$model->roles == 10 ? 'Student' : 'Site User'],
//            ['label'=> 'Status',
//             'value' =>$model->status == 10 ? 'Active' : 'Inactive'],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
