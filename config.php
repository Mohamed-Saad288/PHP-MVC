<?php
return [
    'database'=>
    [
        'connection'=>'mysql:host=localhost',
        'dbname' => 'mvcworkshop',
        'port' => '3325',
        'username' => 'root',
        'password' => '',
        'options' =>
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
    ]
];