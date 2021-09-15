<?php

return [
    'databse' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' =>  '',
        'connection' =>  'mysql:host=localhost',
        'options' => [

            PDO::ATTR_ERRORMODE => PDO::ERRMODE_WARNING

        ]
    ]
    ];