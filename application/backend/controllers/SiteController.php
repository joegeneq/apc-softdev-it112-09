<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\User;

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
           'only' => ['logout', 'signup', 'partners'],
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
               [
                   'actions' => ['partners'],
                   'allow' => true,
                   'roles' => ['@'],
                   'matchCallback' => function ($rule, $action) {
                       return User::isUserAdmin(Yii::$app->user->identity->username);
                   }
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
	   if ($model->load(Yii::$app->request->post()) && $model->loginAdmin()) {
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

        return $this->goHome();
    }
}
