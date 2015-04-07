<?php
use yii\helpers\Html;
<<<<<<< HEAD
use kartik\icons\Icon;

Icon::map($this);  
=======
>>>>>>> origin/master
/*
For future developers, please add your name and picture to this page
remember to use col-lg-4 as class of each div
make sure your photo is square(1:1) and with max resolution of 400x400 pixels
thanks!
*/
/* @var $this yii\web\View */
$this->title = 'The Developers';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="images/bg.jpg">
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>


<h4> SOFTDEV IT112 </h4>
<div class="col-lg-4">
<?= '<img src="'.Yii::$app->homeUrl.'frontend/web/images/devs/kensibayan.jpg" width="200px" style=\'width:65%;height:65%;\'border="0" alt="Null">' ?>
<h4>Kenneth O. Sibayan</h4>
<p>Team Lead<br/>
<<<<<<< HEAD
<?= Icon::show('linkedin-square') . '<a href="https://www.linkedin.com/pub/kenneth-sibayan/89/ba8/b">LinkedIn</a> | '?>
<?= Icon::show('facebook-square') . '<a href="https://www.facebook.com/kensbyn">Facebook</a> | '?>
<?= Icon::show('twitter-square') . '<a href="https://www.twitter.com/kensbyn">Twitter</a>'?>
=======
<a href="http://kensibayan.url.ph">http://kensibayan.url.ph</a>
>>>>>>> origin/master
</p>
</div>
<div class="col-lg-4">
<?= '<img src="'.Yii::$app->homeUrl.'frontend/web/images/devs/joshramos.png" width="200px" style=\'width:65%;height:65%;\'border="0" alt="Null">' ?>
<h4>Josiah Immanuel R. Ramos</h4>
<p>Designer <br />
<<<<<<< HEAD
<?= Icon::show('linkedin-square') . '<a href="https://ph.linkedin.com/pub/josiah-immanuel-ramos/8b/206/44b">LinkedIn</a> | '?>
<?= Icon::show('facebook-square') . '<a href="https://www.facebook.com/callmynamejosh">Facebook</a> | '?>
<?= Icon::show('twitter-square') . '<a href="#">Twitter</a>'?>

=======
<a href="http://www.facebook.com/callmynamejosh">joshrramos</a>	
>>>>>>> origin/master
</p>
</div>
<div class="col-lg-4">
<?= '<img src="'.Yii::$app->homeUrl.'frontend/web/images/devs/alyacle.jpg" width="200px" style=\'width:65%;height:65%;\'border="0" alt="Null">' ?>
<h4>Alyssa Mae C. Acle</h4>
<p>Structure and Database<br/>
<<<<<<< HEAD
<?= Icon::show('linkedin-square') . '<a href="https://ph.linkedin.com/pub/alyssa-mae-acle/b7/51/a03">LinkedIn</a> | '?>
<?= Icon::show('facebook-square') . '<a href="https://www.facebook.com/callmynamejosh">Facebook</a> | '?>
<?= Icon::show('twitter-square') . '<a href="#">Twitter</a>'?></div>

<div class="col-lg-4">
<h4>Joe Gene Quesada</h4>
<p>Instructor<br/>
<a href="https://www.linkedin.com/pub/joe-gene-quesada/6/5a2/b0b">LinkedIn</a>
=======
<a href="http://www.facebook.com/amae.acle">amae.acle</a>
</div>

<div class="col-lg-4">
<h4>J</h4>
<p>Structure and Database<br/>
<a href="http://www.facebook.com/amae.acle">amae.acle</a>
>>>>>>> origin/master
</div>

</div>