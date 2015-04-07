<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?php
        if (Yii::$app->user->isGuest == false){
            if(Yii::$app->user->identity->roles == 25){
                echo Html::a('New Opening', ['create'], ['class' => 'btn btn-success']);
            }
        }
    ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
            // 'id',
            'posts_title',
            // 'posts_body:ntext',
            // 'post_attachment',
            ['label' => 'Author', 'value' => 'author0.username', 'attribute' => 'author'],
            // 'author_role',
            // 'created_at',
            // 'updated_at',
            // 'post_type',
        ],
    ]); ?>

</div>
