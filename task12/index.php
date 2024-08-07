<?php
    require './vendor/autoload.php';
    $viewDir = '/views/';
    $url = '/MyWeb/task12';
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $url . '':
        case $url . '/':
            require __DIR__ . $viewDir . 'home.php';
            break;
    
        case $url . '/main':
            require __DIR__ . $viewDir . 'main.php';
            break;
    
        case $url . '/process':
            require __DIR__ . $viewDir . 'process.php';
            break;

        default:
            http_response_code(404);
            require __DIR__ . $viewDir . '404.php';
            break;
    }
?>