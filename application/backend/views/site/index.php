<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'APC Career Placement Office';
?>
<div class="site-index">

    <div class="jumbotron">
        
    
    </div>

    <div class="body-content">
        <div class="jumbotron">
        <?= '<img'
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h1>Dashboard</h1>                
                <p><?= '<a class="btn btn-default" href="'.Yii::$app->homeUrl.'posts/posts/create">New post &raquo;</a>' ?></p>
            </div>
            <div class="col-lg-4">
                <p>Here you can easily share updates to site visitors. Interns and IPs alike can 
                    see what your announcements that may have relevance to them.</p>

            </div>
            <div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],

//            'id',
            'posts_title',
//            'posts_body:ntext',
            'author',
            'created_at',
            // 'post_type',

        ],
    ]); ?>            </div>
            <div>
                <h2>Asia Pacific College Website</h2>
                <p><a class="btn btn-default" href="http://www.apc.edu.ph">APC Website &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
