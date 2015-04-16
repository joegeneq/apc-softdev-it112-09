<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>

<div class="jumbotron" align="center">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= '<img src="'.Yii::$app->homeUrl.'../images/error.png" style=\'width:65%;height:65%;align:center;\'border="0" alt="Null">' ?>

    <p>
        Looks like you're lost! <br/>
        Please <?= '<a href="'.Yii::$app->homeUrl.'site/contact">contact us</a>' ?> if you think this is a server error. Thank you.
    </p>
    <p>You will be redirected to our homepage in <span id="countdown">5</span> seconds.<br/>
       <?='Click <a href="'.Yii::$app->homeUrl.'">here</a> if the browser won\'t redirect you.'?>
    </p>
<script type="text/javascript">

(function () {
    var timeLeft = 5,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);
            <?= 'location.href = \''.Yii::$app->homeUrl.'../\';' ?>
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();

</script>

</div>
