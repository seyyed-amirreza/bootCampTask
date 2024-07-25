<?php
    $viewDir = '/views/';
    $url = '/MyWeb/task11';
    $request = $_SERVER['REQUEST_URI'];
    echo(__DIR__ . $viewDir . 'home.php');

    switch ($request) {
        case $url . '':
        case $url . '/':
            require __DIR__ . $viewDir . 'home.php';
            break;
    
        case $url . '/main':
            require __DIR__ . $viewDir . 'main.php';
            break;
    
        default:
            http_response_code(404);
            require __DIR__ . $viewDir . '404.php';
            break;
    }
?>