<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
    use frontend\models\Partners;
    $partnerss=Partners::find()->all();

    use yii\helpers\ArrayHelper;
    $listData=ArrayHelper::map($partnerss, 'id','company_name');

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to sign up:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'email')->label('Email:') ?>
				<?= $form->field($model, 'username')->label('Username:') ?>
				<?= $form->field($model, 'firstname')->label('Given name:') ?>
				<?= $form->field($model, 'lastname') ?>               
				<?= $form->field($model, 'roles')->dropDownList(['Student','Industry Professor','Partner HR'], ['prompt'=>'Select...'])->label('Account Type') ?>
				<?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


