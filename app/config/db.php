<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.$_ENV['MYSQL_HOST'].';dbname='.$_ENV['MYSQL_NAME'],
    'username' => $_ENV['MYSQL_ROOT_USER'],
    'password' => $_ENV['MYSQL_ROOT_PASSWORD'],
    'charset' => $_ENV['MYSQL_CHARSET'],
];
