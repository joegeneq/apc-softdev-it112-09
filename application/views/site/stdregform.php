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
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to sign up:</p>

    <div class="row">
        <div class="col-lg-5">
<?php $form = ActiveForm::begin(); ?>
<div>
<dib
<table>

<?= $form->field($model,'stdnt_num')->label('Student Number:'); ?><br/>
<?= $form->field($model,'lstnme')->label('Last Name:'); ?><br/>
<?= $form->field($model,'frstnme')->label('First Name:'); ?><br/>
<?= $form->field($model,'initial')->label('Initial:'); ?><br/>
<?= $form->field($model,'email')->label('Email:'); ?><br/>
<?= $form->field($model, 'passwd')->passwordInput()->label('Password:') ?><br/><br/>


<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
</table>
        </div>
    </div>
</div>