<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Province */
/* @var $form yii\widgets\ActiveForm */

		use app\models\Region;
		$regions=Region::find()->all();

		use yii\helpers\ArrayHelper;
		$listData=ArrayHelper::map($regions,'id','region_description');
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province_code')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'province_description')->textInput() ?>

    <?= $form->field($model, 'region_id')->dropDownList(
								$listData, 
								['prompt'=>'Select...'])->label('Region') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
