<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;

if(Yii::$app->user->isGuest == false){
$model->name = Yii::$app->user->identity->firstname.' '.Yii::$app->user->identity->lastname;
$model->email = Yii::$app->user->identity->email;

}

?>
<div class="site-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    Ms. Jacqueline Cuansing<br/>
    CPO Officer<br/><br/>

    Ms. Avon Amores<br/>
    CPO Coordinator<br/><br/>

    For urgent matters outside Ms. Jacq & Ms. Avon's CPO office hours, please call 852-9232 loc. 508 or 511.<br/>


    For non-urgent matters & other inquiries, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?php
                if(Yii::$app->user->isGuest){
                    echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]);
                }
                ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <p>
    CPO is open from Mondays to Fridays, 8:00 AM to 5:00 PM
    </p>

</div>
