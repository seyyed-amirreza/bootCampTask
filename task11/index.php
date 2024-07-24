<?php
    $request = $_SERVER['REQUEST_URI'];
    var_dump($request);

    $viewDir = '/views/';

    switch ($request) {
        case '':
        case '/':
            require __DIR__ . $viewDir . 'home.php';
            break;
    
        case '/main':
            require __DIR__ . $viewDir . 'main.php';
            break;
    
        default:
            http_response_code(404);
            require __DIR__ . $viewDir . '404.php';
            break;
    }
?>