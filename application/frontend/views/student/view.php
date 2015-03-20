<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */

$this->title = $model->lastname . ', ' . $model->firstname;
$this->params['breadcrumbs'][] = ['label' => 'Students'];
$this->params['breadcrumbs'][] = $model->username;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
 //           'id',
 //           'user_id',
			'student_id',
            'username',
            ['label' => 'First Name', 'value' => $model->firstname],
            ['label' => 'Last Name', 'value' => $model->lastname],
			'course',
            ['label' => 'Contact Number', 'value' => $model->contact_num],
            'email:email',
            'address:ntext',
        ],
    ]) ?>

</div>
