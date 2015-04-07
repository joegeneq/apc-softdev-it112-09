<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Professors;
use frontend\models\ProfessorsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
/**
 * ProfessorsController implements the CRUD actions for Professors model.
 */
class ProfessorsController extends Controller
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
     * Displays a single Professors model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $sel = Professors::find()
                        ->where(['id' => $id])
                        ->one();
        if (Yii::$app->user->isGuest==false) {
        if (Yii::$app->user->identity->id == $sel->user_id) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);

            }else {
                throw new ForbiddenHttpException;
            }
        }else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing Professors model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 15){
        $model = $this->findModel($id);
        if($model->user_id == Yii::$app->user->identity->id){

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
}else{
                            Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed to update this user',
                            'title' => 'Update Account',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                throw new ForbiddenHttpException;            
        }
                    } else{
                                        Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed to update this user',
                            'title' => 'Update Account',
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
                            'message' => 'You are not allowed to update this user',
                            'title' => 'Update Account',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }

    }

    /**
     * Finds the Professors model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Professors the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Professors::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
