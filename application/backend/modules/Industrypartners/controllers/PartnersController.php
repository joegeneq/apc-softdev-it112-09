<?php

namespace backend\modules\Industrypartners\controllers;

use Yii;
use backend\modules\Industrypartners\models\IndustryPartners;
use backend\modules\Industrypartners\models\PartnersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\ForbiddenHttpException;

/**
 * PartnersController implements the CRUD actions for IndustryPartners model.
 */
class PartnersController extends Controller
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
     * Lists all IndustryPartners models.
     * @return mixed
     */
    public function actionIndex()
    {
		
if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
        $searchModel = new PartnersSearch();
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
     * Displays a single IndustryPartners model.
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
     * Creates a new IndustryPartners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
			$model = new IndustryPartners();

			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				$imageName = $model->id;
                                if($model->file != null){
				$model->file = UploadedFile::getInstance($model,'file');
					$model->file->saveAs('web/image/company_images/'. $imageName .'.'.$model->file->extension);
					$model->company_logo = 'image/company_images/'. $imageName .'.'.$model->file->extension;
				}
				$model->save();
				
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
     * Updates an existing IndustryPartners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
               if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 20){
             $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $imageName = $id;
                                            if($model->file != null){
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('web/image/company_images/'. $imageName .'.'.$model->file->extension);

            $model->company_logo = 'image/company_images/'. $imageName .'.'.$model->file->extension;
            }
            $model->save();

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
     * Deletes an existing IndustryPartners model.
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
     * Finds the IndustryPartners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return IndustryPartners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IndustryPartners::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
