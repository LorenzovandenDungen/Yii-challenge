<?php

// Loading parameters and database configuration from separate files
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

// Main application configuration
$config = [
    'id' => 'basic', // Unique identifier for the application
    'basePath' => dirname(__DIR__), // Base path of the application
    'bootstrap' => ['log'], // Bootstrap components, e.g., 'log' component

    // Aliases for file paths
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

    // Application components
    'components' => [
        // Request component with cookie validation key
        'request' => [
            'cookieValidationKey' => 'YOUR_SECRET_KEY', // Replace 'YOUR_SECRET_KEY' with a unique, random string
        ],

        // Cache component using file-based caching
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        // User component for user authentication
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],

        // Error handler component
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        // Mailer component for sending emails
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            'useFileTransport' => true, // Set to false in production to send real emails
        ],

        // Logging component
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        // Database configuration
        'db' => $db,

        // URL Manager for pretty URLs
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [], // Define URL rules here
        ],
    ],

    // Application parameters
    'params' => $params,
];

// Development environment specific configuration
if (YII_ENV_DEV) {
    // Debug module for development environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // Uncomment and set your IP if accessing from a non-local address
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    // Gii module for code generation
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // Uncomment and set your IP if accessing from a non-local address
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

// Return the final configuration array
return $config;
