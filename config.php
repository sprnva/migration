<?php

return [
    'database' => [
        'name' => 'sprnva',
        'username' => 'root',
        'password' => '',
        'connection' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ],

    'app' => [
        // for more flexible database migration please indicate 
        // the path of mysql in your machine including the trailing slashes.
        'mysql_path' => 'C:\\xampp8\\mysql\\bin\\',
    ]
];
