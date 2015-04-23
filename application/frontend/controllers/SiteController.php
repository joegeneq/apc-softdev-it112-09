<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Student;
use frontend\models\Professors;
use frontend\models\Partnerhr;
use yii\swiftmailer\Mailer;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $sel = Student::find()
                        ->where(['username' => Yii::$app->user->identity->username])
                        ->one();
            if(Yii::$app->user->identity->roles == 10){
            Yii::$app->getSession()->setFlash('success', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => Yii::$app->homeUrl.$sel->student_pic,
                            'message' => '<img src=\''.Yii::$app->homeUrl.$sel->student_pic . '\' width=\'35px\' height=\'35px\' draggable="false" border="0" alt="Null"> Welcome ' . Yii::$app->user->identity->username . '!',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            }else{
                            Yii::$app->getSession()->setFlash('success', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => Yii::$app->homeUrl.'images/student_images.png',
                            'message' => '<img src=\''.Yii::$app->homeUrl .'images/profile_images/student_image.png\'width=\'35px\' height=\'35px\' draggable="false" border="0" alt="Null"> Welcome ' . Yii::$app->user->identity->username . '!',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            }
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
            Yii::$app->getSession()->setFlash('warning', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You have been logged out. Thank you!',
                            'title' => 'Logout',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);        
        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('success', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'An email has been sent to '. Yii::$app->params['adminEmail'] . '. Thank you for contacting us. We will respond to you as soon as possible.',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            } else {
                                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'There was an error sending email.',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);

            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionDevs()
    {
        return $this->render('devs');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
					$sel = Student::find()
						->where(['user_id' => Yii::$app->user->id])
						->one();

                    $sel2 = Partnerhr::find()
                        ->where(['user_id' => Yii::$app->user->id])
                        ->one();      

					if($sel != null){
						Yii::$app->getSession()->setFlash('info', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'Please complete your account details.',
                            'title' => 'Registration',
                            'positonY' => 'top',
                            'positonX' => 'center'
                        ]);
                        return $this->redirect('../student/'.$sel->id, 302);
					}else if($sel2 != null){
                        Yii::$app->getSession()->setFlash('info', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'Please complete your account details.',
                            'title' => 'Registration',
                            'positonY' => 'top',
                            'positonX' => 'center'
                        ]);
                        return $this->redirect('../partnerhr/'.$sel2->id, 302);
                    }else{
					$sel1 = Professors::find()
						->where(['user_id' => Yii::$app->user->id])
						->one();
                        Yii::$app->getSession()->setFlash('info', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'Please complete your account details.',
                            'title' => 'Registration',
                            'positonY' => 'top',
                            'positonX' => 'center'
                        ]);
					    return $this->redirect('../professors/'.$sel1->id, 302);						
					}
                }
            }
        }

        return $this->render('signup', ['model' => $model,]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                                       Yii::$app->getSession()->setFlash('success', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'An email has been sent with the link on how to reset your password.',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);

                return $this->goHome();
            } else {
                                        Yii::$app->getSession()->setFlash('success', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'Sorry, we are unable to reset password for email provided.',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);

            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
