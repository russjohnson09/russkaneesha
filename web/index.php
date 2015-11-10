<?php

require __DIR__.'./../.env.php';

define('YII_ENV', $_ENV['env']);

if (YII_ENV === 'dev') {
    define('YII_DEBUG', true);
}
// comment out the following two lines when deployed to production


require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
