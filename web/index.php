<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// carrega a configuração da aplicação
$config = require __DIR__ . '/../config/web.php';

// instancia e configura a aplicação
(new yii\web\Application($config))->run();
