<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use frontend\models\Student;
use frontend\models\Professors;
use frontend\models\Partnerhr;
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
				if (Yii::$app->user->isGuest == false){
                    $sel = Student::find()->where(['username' => Yii::$app->user->identity->username])->one();
					$sel1 = Professors::find()->where(['username' => Yii::$app->user->identity->username])->one();				
					$sel2 = Partnerhr::find()->where(['username' => Yii::$app->user->identity->username])->one();
                    	if($sel != null){
							$strings = '/student/'.$sel->id;
						}
						if($sel == null){
							$ifcpo = User::find()->where(['username' => Yii::$app->user->identity->username])->one();
							if($ifcpo->roles == 20){
								$strings = ' ';
							}else if($ifcpo->roles == 25){
                                $strings = '/partnerhr/'.$sel2->id;                                
                            }else{
								$strings = '/professors/'.$sel1->id;
                            }
						}
					$siteusr = User::find()->where(['username' => Yii::$app->user->identity->username])->one();
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
				if($siteusr->roles == 20){
					$menuItems[] = ['label' => '<img src=\''. Yii::$app->homeUrl .'/images/profile_images/student_image.png\'width=\'25px\' height=\'25px\' border="0" alt="Null">',
						'items' => [
							['label' => 'Manage website', 'url' => ['../../backend/web']],
							['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
						]
					];

				}else if($siteusr->roles == 10){

					$menuItems[] = ['label' => '<img src=\''. Yii::$app->homeUrl . $sel->student_pic .'\' width=\'25px\' height=\'25px\' border="0" alt="Null">',
						'items' => [
							['label' => 'My account', 'url' => [$strings]],
							['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
						]
					];
				}else if($siteusr->roles == 15){
                    $menuItems[] = ['label' => '<img src=\''. Yii::$app->homeUrl . '/images/profile_images/student_image.png\' width=\'25px\' height=\'25px\' border="0" alt="Null">',
                        'items' => [
                            ['label' => 'Manage website', 'url' => ['../../backend/web']],
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
                        ]
                    ];

                }else if($siteusr->roles == 25){
                    $menuItems[] = ['label' => '<img src=\''. Yii::$app->homeUrl . 'images/profile_images/student_image.png\' width=\'25px\' height=\'25px\' border="0" alt="Null">',
                        'items' => [
                            ['label' => 'Manage website', 'url' => [Yii::$app->homeUrl . '/../backend/web']],
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
                        ]
                    ];

                }
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
        <p class="pull-left">&copy; APC Career Placement Office <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
