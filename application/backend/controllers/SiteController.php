<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\User;
use yii\web\ForbiddenHttpException;

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
                   'allow' => false,
                   'roles' => ['?'],
               ],
               [
                   'actions' => ['logout'],
                   'allow' => true,
                   'roles' => ['@'],
               ]
/*               [
 *                  'actions' => ['partners'],
*                 'allow' => true,
*                  'roles' => ['@'],
 *                  'matchCallback' => function ($rule, $action) {
  *                     return User::isUserAdmin(Yii::$app->user->identity->username);
   *                }
    */           ],
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
		if(Yii::$app->user->can('admin'))
		{
			return $this->render('index');
		}else
		{
			Yii::$app->getSession()->setFlash('success', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed to access this page!',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
			
			throw new ForbiddenHttpException;
		}
    }

    public function actionLogin()
    {
	   if (!\Yii::$app->user->isGuest) {
		  return $this->goHome();
	   }
	 
	   $model = new LoginForm();
	   if ($model->load(Yii::$app->request->post()) && $model->loginAdmin()) {
            Yii::$app->getSession()->setFlash('success', [
                            'type' => 'growl',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'Welcome ' . Yii::$app->user->identity->username . '!',
                            'title' => 'APC Career Placement Office',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
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
}
