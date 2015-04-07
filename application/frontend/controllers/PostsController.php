<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Posts;
use frontend\models\PostsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class PostsController extends Controller
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
     * Lists all Posts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Posts model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Posts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 25){
                $model = new Posts();
                $model->author = Yii::$app->user->identity->id;
                $model->author_role = Yii::$app->user->identity->roles;
                $model->post_type = 'HR Request';
                if ($model->load(Yii::$app->request->post()) && $model->save()) {

                $model->file = UploadedFile::getInstance($model,'file');
                if($model->file != null){
                    $fileName = $model->file->name;
                    $model->file->saveAs('backend/web/attachments/'. $fileName);
                    $model->post_attachment = 'attachments/'. $fileName;
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
                            'message' => 'You are not allowed to create a post.',
                            'title' => 'Create Post',
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
                            'message' => 'You are not allowed to create a post.',
                            'title' => 'Create Post',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing Posts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 25){
        $model = $this->findModel($id);
        if($model->author == Yii::$app->user->identity->id){
            if ($model->load(Yii::$app->request->post()) && $model->save()) {

                $model->file = UploadedFile::getInstance($model,'file');
                if($model->file != null){
                    $fileName = $model->file->name;
                    $model->file->saveAs('backend/web/attachments/'. $fileName);
                    $model->post_attachment = 'attachments/'. $fileName;
                }
                $model->save();

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
                            'message' => 'You are not allowed to update this post',
                            'title' => 'Update Post',
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
                            'message' => 'You are not allowed to update this post',
                            'title' => 'Update Post',
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
                            'message' => 'You are not allowed to update this post',
                            'title' => 'Update Post',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Deletes an existing Posts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->isGuest==false){
            if(Yii::$app->user->identity->roles == 25){
                if($this->findModel($id)->author == Yii::$app->user->identity->id){
                    $this->findModel($id)->delete();

                    return $this->redirect(['index']);
                }else{
                                                Yii::$app->getSession()->setFlash('error', [
                            'type' => 'danger',
                            'duration' => 3000,
                            'icon' => 'fa fa-users',
                            'message' => 'You are not allowed to delete this post',
                            'title' => 'Delete Post',
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
                            'message' => 'You are not allowed to delete this post',
                            'title' => 'Delete Post',
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
                            'message' => 'You are not allowed to delete this post',
                            'title' => 'Delete Post',
                            'positonY' => 'top',
                            'positonX' => 'center'
            ]);
                        throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the Posts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Posts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Posts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
