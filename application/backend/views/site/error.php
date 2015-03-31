<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>

<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        The above error occurred while the Web server was processing your request. <br/>
        Please contact us if you think this is a server error. Thank you.
    </p>
	<p>You will be redirected in <span id="counter">5</span> second(s).
	   <?='Click <a href="'.Yii::$app->homeUrl.'../">here</a> if the browser won\'t redirect you.'?>
	</p>
	<script type="text/javascript">
	function countdown() {
	    var i = document.getElementById('counter');
	    if (parseInt(i.innerHTML)==0) {
	        <?= 'location.href = \''.Yii::$app->homeUrl.'../\';' ?>
	    }
	    if(parseInt(i.innerHTML)>0){
	    	i.innerHTML = parseInt(i.innerHTML)-1;
		}
	}
	setInterval(function(){ countdown(); },1000);
	</script>

</div>
