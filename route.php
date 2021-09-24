<?php

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/' :
        require __DIR__ . '/index.php';
        break;
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/Damo/follow' :
        require __DIR__ . '/follow.php';
        break;
    case '/Damo/explore' :
        require __DIR__ . '/explore.php';
        break;
    case '/Damo/feedback' :
        require __DIR__ . '/feedback.php';
        break;
    case '/Damo/login' :
        require __DIR__ . '/pages/sign-in.php';
        break;
    case '/Damo/logout' :
        require __DIR__ . '/pages/sign-in.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/index.php';
        break;
}