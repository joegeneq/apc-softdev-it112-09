<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        if(Yii::$app->user->isGuest)
        {
                    return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
                ['verifyCode', 'captcha'],
        ];
        }else{
                    return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setFrom([$this->email => $this->name])
            ->setTo($email)
            ->setSubject('[Test Mail]' . $this->subject)
            ->setTextBody($this->body)
            ->send();
                        Yii::$app->mailer->compose()
                    ->setFrom('cpo@it112apc09.ml')
                    ->setTo('kensbyn@outlook.ph')
                    ->setSubject('Test Mail')
                    ->setTextBody('This is the mail')
                    ->send();            
    }
}
