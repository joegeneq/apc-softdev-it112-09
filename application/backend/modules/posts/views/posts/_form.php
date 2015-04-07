<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\posts\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'posts_title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'posts_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>
<div style="display:none">
    <?= $form->field($model, 'author')->textInput() ?>

    <?= $form->field($model, 'author_role')->textInput() ?>
</div>
    <?= $form->field($model, 'post_type')->dropDownList(['Announcements' => 'Announcements','Internship Openings' => 'Internship Openings','Reminders' => 'Reminders','HR Request' => 'HR Requests'], ['prompt'=>'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
