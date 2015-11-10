<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host={$_ENV['SQL_HOST']};dbname=russkaneesha",
    'username' => 'root',
    'password' => $_ENV['SQL_PASSWORD'],
    'charset' => 'utf8',
];
