<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use frontend\models\Student;
use frontend\models\Professors;
use common\models\User;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php			
				if (Yii::$app->user->isGuest == false){
				$sel1 = Professors::find()->where(['username' => Yii::$app->user->identity->username])->one();				
				$sel = Student::find()->where(['username' => Yii::$app->user->identity->username])->one();
				if($sel != null){
					$strings = '/student/'.$sel->id;
				}
				if($sel == null){
					$strings = '/professors/'.$sel1->id;
				}
				}

            NavBar::begin([
                'brandLabel' => 'APC Career Placement Office',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Partners', 'url' => ['/partners/index']],
                ['label' => 'Contact Us', 'url' => ['/site/contact']],
                ['label' => 'About', 'url' => ['/site/about']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '',
								'items' => [
									['label' => 'Signup', 'url' => ['/site/signup']],
									['label' => 'Login', 'url' => ['/site/login']]
								]
								];
            } else {
                $menuItems[] = ['label' => '',
								'items' => [
											['label' => 'My account', 'url' => [$strings]],
											['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
								]
				];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; APC Career Placement Office <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
