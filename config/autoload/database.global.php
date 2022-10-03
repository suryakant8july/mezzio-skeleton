<?php

declare(strict_types=1);

return [ 
    'db' => [
        'driver' => 'Pdo',       
        'dsn' => 'mysql:dbname=<db_name>;host=mysql;charset=utf8',
        'user' => '<db_username>',
        'password' => '<db_password>',
        'driver_options' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET SESSION sql_mode = \'\''),
    ],
];
