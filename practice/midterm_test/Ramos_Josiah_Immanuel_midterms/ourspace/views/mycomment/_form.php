<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Myaddress;

    $myaddresses=Myaddress::find()->all();
    $listData=ArrayHelper::map($myaddresses,'id','lastname');

/* @var $this yii\web\View */
/* @var $model app\models\mycomment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mycomment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'myaddress_id')->dropDownList(
            $listData,
            ['prompt'=>'Choose from...'])->label('Name') ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
