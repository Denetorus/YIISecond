<?php
require 'Telegram.php';

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'bot' => [
        'class' => 'SonkoDmitry\Yii\TelegramBot\Component',
        'apiToken' => 'AAHbHbQonPNFj3_fVYCT5w_HZmqUNI2ESw0',
            ]

    ],
];
