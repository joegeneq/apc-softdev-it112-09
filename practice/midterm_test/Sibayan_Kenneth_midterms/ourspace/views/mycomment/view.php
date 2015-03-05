<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MyComment */
    
            use app\models\Myaddress;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'My Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
<<<<<<< HEAD
            [label => 'Lastname', 'value' => $model->myaddress->lastname],
=======
            ['label' => 'Last Name', 'value' => $model->myaddress->lastname],
>>>>>>> 96a04d20ee652ff4b2cd8781b1a54d30dd7fbed1
            'author',
            'body:ntext',
            'created_at',
        ],
    ]) ?>

</div>
