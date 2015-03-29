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

    <?php
        if ($model->student_pic == null) {
            echo '<img src=\'../images/profile_images/student_image.png\' width=\'150px\' height=\'150px\' style=\'width:10%;height:10%;float:right;\' border="1" alt="Null">';
            echo '<h1>'. $this->title .'</h1>';
        }else{
            echo '<img src=\'../'. $model->student_pic . '\' width=\'150px\' height=\'150px\' style=\'width:10%;height:10%;float:right;\' border="0" alt="Null">';
            echo '<h1>'. $this->title .'</h1>';
        }
    ?>
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
        <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
