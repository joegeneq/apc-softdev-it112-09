<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Professors */
/* @var $form yii\widgets\ActiveForm */

		use frontend\models\Partners;
		$partnerarray=Partners::find()->all();

		use yii\helpers\ArrayHelper;
		$listData=ArrayHelper::map($partnerarray,'id','company_name');
?>

<div class="professors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'contact_num')->textInput(['maxlength' => 15]) ?>

     <?= $form->field($model, 'company_id')->dropDownList(
								$listData, 
								['prompt'=>'Select...'])->label('Company') ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
