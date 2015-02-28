<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\city */
/* @var $form yii\widgets\ActiveForm */

		use app\models\Province;
		$provinces=Province::find()->all();

		use yii\helpers\ArrayHelper;
		$listData=ArrayHelper::map($provinces,'id','province_description');
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city_code')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'city_description')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'province_id')->dropDownList(
								$listData, 
								['prompt'=>'Select...'])->label('Province') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
