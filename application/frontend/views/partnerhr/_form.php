<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Partners;

/* @var $this yii\web\View */
/* @var $model frontend\models\Partnerhr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partnerhr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'contact_num')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'company_id')->dropDownList(
            ArrayHelper::map(Partners::find()->all(),'id','company_name'),    
            ['prompt' => 'Select Company'])
    ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
