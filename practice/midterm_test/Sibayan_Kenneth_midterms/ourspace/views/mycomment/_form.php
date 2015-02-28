<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MyComment */
/* @var $form yii\widgets\ActiveForm */

		use app\models\Myaddress;
		$myaddresses=Myaddress::find()->all();

		use yii\helpers\ArrayHelper;
		$listData=ArrayHelper::map($myaddresses,'id','lastname');
?>

<div class="my-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'myaddress_id')->dropDownList(
								$listData, 
								['prompt'=>'Select...'])->label('lastname') ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
