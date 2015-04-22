<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=apc-cpo-db',
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
            'host' => 'smtp-mail.outlook.com',
            'username' => 'cpo@outlook.ph',
            'password' => 'gqfxrkckuajbfrog',
            'port' => '587',
            'encryption' => 'tls',
                        ],
        ],
        ],
];

//rQK5x8hOfbXBR - it112apc09.ml
//gqfxrkckuajbfrog - outlook
