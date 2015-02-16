<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_num')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'initial')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 70]) ?>

    <?= $form->field($model, 'enrolled')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
