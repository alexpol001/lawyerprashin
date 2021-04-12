<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'timeZone' => 'Europe/Moscow',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'Симбиоз',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=u0n',
            'username' => 'u0',
            'password' => 'u04',
            'charset' => 'utf8',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => function () {
            if (\common\models\setting\Setting::take()->mail->protocol != 0) {
                return Yii::createObject([
                    'class' => 'yii\swiftmailer\Mailer',
                    'viewPath' => '@common/mail',
                    'transport' => [
                        'class' => 'Swift_SmtpTransport',
                        'host' => \common\models\setting\Setting::take()->mail->host,
                        'username' => \common\models\setting\Setting::take()->mail->username,
                        'password' => \common\models\setting\Setting::take()->mail->password,
                        'port' => \common\models\setting\Setting::take()->mail->port,
                        'encryption' => \common\models\setting\Setting::take()->mail->encryption,
                    ],
                    'useFileTransport' => false,
                ]);
            }
            return Yii::createObject([
                'class' => 'yii\swiftmailer\Mailer',
                'viewPath' => '@common/mail',
                'useFileTransport' => false,
            ]);
        },
    ],
];
