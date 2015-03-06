<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\management\models\Userman */
/* @var $form yii\widgets\ActiveForm */

        use backend\modules\management\models\IndustryPartners;
        $partners=IndustryPartners::find()->all();

        use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($partners,'id','company_name');
?>

<div class="userman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'roles')->dropDownList(
                                ['10' => 'Student', '15' => 'IP', '20' => 'CPO'], 
                                ['prompt'=>'Select...'])->label('Role') ?>

    <?= $form->field($model, 'company_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select...'])->label('Company') ?>

    <?= $form->field($model, 'status')->dropDownList(
                                ['10' => 'Active', '0' => 'Inactive'], 
                                ['prompt'=>'Select...'])->label('User Status') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
