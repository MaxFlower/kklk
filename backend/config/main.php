<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'settings' => [
            'class' => 'backend\modules\settings\Settings',
        ],
        'permit' => [
            'class' => 'developeruz\db_rbac\Yii2DbRbac',
            'params' => [
                'userClass' => 'common\models\User'
            ]
        ],
    ],    
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => 'backend/views'
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_backendUser',
                'path' => '/backend/web'
            ]
        ],
        'session' => [
            'name' => '_backendSessionId',
            'savePath' => __DIR__ . '/../runtime' //временная папка в backend
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                             
                '<module:\w+>/<controller:\w+>/<action:(\w|-)+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:(\w|-)+>/<id:\d+>' => '<module>/<controller>/<action>',
                '' => 'site/index',
                'login' => 'site/login',
                'logout' => 'site/logout',
                'calendar' => 'site/calendar',
                'profile' => 'site/profile',
            ]                                   
        ],
        'authManager' => [
            'class' => 'yii\rbac\DBManager',
            'defaultRoles' => ['guest'],            
        ],        
    ],
    'params' => $params,
];
