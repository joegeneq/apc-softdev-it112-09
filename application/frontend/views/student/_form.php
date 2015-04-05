<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'student_id')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>   
    
    <?= $form->field($model, 'contact_num')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'course')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
