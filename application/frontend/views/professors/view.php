<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Professors */

$this->title = $model->lastname.', '.$model->firstname;
$this->params['breadcrumbs'][] = ['label' => 'Professors'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //['label' => 'User Name', 'value' => $model->username],
            ['label' => 'First Name', 'value' => $model->firstname],
            ['label' => 'Last Name', 'value' => $model->lastname],
            'email:email',
            ['label' => 'Contact No.', 'value' => $model->contact_num],
            'company_id',
            //'user_id',
        ],
    ]) ?>

</div>
