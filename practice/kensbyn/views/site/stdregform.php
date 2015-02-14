<?php

use yii\helpers\Html;
use yii\widgets\CActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<table>
<tr>
<?= $form->field($model,'stdnt_num'); ?></tr>
<?= $form->field($model,'lstnme'); ?>
<?= $form->field($model,'frstnme'); ?>
<?= $form->field($model,'initial'); ?>
<?= $form->field($model,'email'); ?>
<?= $form->passwordField($model,'passwd'); ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
</table>