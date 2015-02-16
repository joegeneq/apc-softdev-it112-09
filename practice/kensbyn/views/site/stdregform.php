<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<H2 class=header>Student Registration</H2><br><br>

<?php
	if(Yii::$app->session->getFlash('success')){
		echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
	}
?>

<?php $form = ActiveForm::begin(); ?>
<table>

<?= $form->field($model,'stdnt_num')->label('Student Number:'); ?><br/>
<?= $form->field($model,'lstnme')->label('Last Name:'); ?><br/>
<?= $form->field($model,'frstnme')->label('First Name:'); ?><br/>
<?= $form->field($model,'initial')->label('Initial:'); ?><br/>
<?= $form->field($model,'email')->label('Email:'); ?><br/>
<?= $form->field($model, 'passwd')->passwordInput()->label('Password:') ?><br/><br/>


<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
</table>