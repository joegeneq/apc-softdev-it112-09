<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>;
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
<?php foreach (Yii::$app->session->getAllFlashes() as $message):; ?>
<?php
echo \kartik\widgets\Growl::widget([
    'type' => ($message['type']) ? $message['type'] : 'danger',
    'title' => ($message['title']) ? $message['title'] : 'Title Not Set!',
    'icon' => ($message['icon']) ? $message['icon'] : 'fa fa-info',
    'body' => ($message['message']) ? $message['message'] : 'Message Not Set!',
    'showSeparator' => true,
    'delay' => 1,//This delay is how long before the message shows
    'pluginOptions' => [
        'delay' => ($message['duration']) ? $message['duration'] : 3000,//This delay is how long the message shows for
        'placement' => [
            'from' => ($message['positonY']) ? $message['positonY'] : 'top',
            'align' => ($message['positonX']) ? $message['positonX'] : 'center',
        ]
    ]
]);
?>
<?php endforeach; ?>
        <?php
            NavBar::begin([
                'brandLabel' => 'APC CPO Management',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = ['label' => 'Industry Partners',
                                'items'=> [
                                    ['label' => 'Companies', 'url' => ['/industrypartners/partners']],
                                    ['label' => 'Contacts', 'url' => ['/industrypartners/hr']]
                                ]
                                ];
				$menuItems[] = ['label' => 'Internship Program',
								'items' => [
                                    ['label' => 'Internships', 'url' => ['/internship/internship']],
									['label' => 'Student List', 'url' => ['/internship/student']],
									['label' => 'IP List', 'url' => ['/internship/industryprofessors']]
								]
								];
                $menuItems[] = ['label' => 'Site Users', 'url' => ['/siteusers/usermanagement']];
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
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
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; APC CPO Communication Site <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
