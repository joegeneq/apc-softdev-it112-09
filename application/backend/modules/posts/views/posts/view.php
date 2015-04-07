<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\modules\posts\models\Posts;
use backend\modules\posts\models\PostslatestSearch;
/* @var $this yii\web\View */
/* @var $model backend\modules\posts\models\Posts */
$searchModel = new PostslatestSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

$this->title = $model->posts_title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php
        function role($data){
            if($data == 10){
                return 'Student';
            }else if($data == 15){
                return 'Industry Professor';
            }else if($data == 20){
                return 'CPO';
            }else if($data == 25){
                return 'Partner HR';
            }
        };
?>
    <div class='col-lg-7'>
    <p>
        <?= $model->posts_body; ?>
    </p>
    </div>
    <div class='col-lg-5'>
    <p>
    <h3>Latest Posts</h3>
         <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['label'=>'Title','value'=>function($data){
                                            return '<a href=\'view?id='.$data->id.'\'>'.$data->posts_title.'</a>';
                                        },
             'attribute' => 'posts_title', 'format' => 'raw'],
        ],
    ]); ?>
    </p>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'posts_title',
//            'posts_body:ntext',
            ['value' =>Html::a(str_replace('attachments/', "", $model->post_attachment),Yii::$app->homeUrl.'web/'.$model->post_attachment), 'attribute' => 'post_attachment', 'format' => 'raw'],
            ['label' =>'Author','value' =>$model->author0->lastname.', '.$model->author0->firstname],
            ['label' => 'Author role','value' => role($model->author_role), 'attribute' => 'author_role'],
            'created_at:datetime',
            'updated_at:datetime',
            'post_type',
        ],
    ]) ?>
</div>
