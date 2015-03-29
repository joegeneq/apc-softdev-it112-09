<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=apc-cpo-db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'viewPath' => '@common/mail',
        'useFileTransport' => false,//set this property to false to send mails to real email addresses
        //comment the following array to send mail using php's mail function
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'mx1.hostinger.ph',
            'username' => 'cpo@it112apc09.ml',
            'password' => 'AsiaPacificCollege',
            'port' => '2525',
 //           'encryption' => 'tls',
                        ],
        ],
        ],
];


