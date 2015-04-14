<?php

namespace backend\modules\Industrypartners\controllers;

use Yii;
use backend\modules\Industrypartners\models\Hr;
use backend\modules\Industrypartners\models\HrSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * HrController implements the CRUD actions for Hr model.
 */
class HrController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Hr models.
     * @return mixed
     */
    public function actionIndex()
    {
    if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
			$searchModel = new HrSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
} else{
                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                throw new ForbiddenHttpException;
            }   
        }else{
                            Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Displays a single Hr model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
            if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
                return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
                } else{
                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                throw new ForbiddenHttpException;
            }   
        }else{
                            Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Creates a new Hr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hr();
            if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
                        } else{
                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                throw new ForbiddenHttpException;
            }   
        }else{
                            Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing Hr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
            if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
                                } else{
                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                throw new ForbiddenHttpException;
            }   
        }else{
                            Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Deletes an existing Hr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        
            if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);

                                } else{
                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                throw new ForbiddenHttpException;
            }   
        }else{
                            Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed here.',
                            'title' => 'Administration',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the Hr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hr::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
