<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'APC Career Placement Office';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Post new</h2>                    
                <p><?= '<a class="btn btn-default" href="'.Yii::$app->homeUrl.'posts/posts/create">New post &raquo;</a>' ?></p>
            </div>
            <div class="col-lg-4">
                <p>&nbsp</p>
                <p>&nbsp</p>
                <p>Here you can easily share updates to site visitors. Interns and IPs alike can 
                    see what your announcements that may have relevance to them.</p>

            </div>
            <div class="col-lg-4">
                    <?= '<img src=\''.Yii::$app->homeUrl.'web/image/banner1.png\' style=\'height:100%;width:100%;\'>' ?>
            </div>        
            <div style="float:right;">
                <p><a class="btn btn-default" href="http://www.apc.edu.ph">APC Website &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
