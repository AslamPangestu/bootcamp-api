<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'db' => [
            'host' => 'us-cdbr-iron-east-03.cleardb.net',
            'user' => 'bf88bd4937311c',
            'pass' => 'b1146d66',
            'dbname' => 'heroku_46d7dade0597cad',
            'driver' => 'mysql'
        ]
    ],
];
