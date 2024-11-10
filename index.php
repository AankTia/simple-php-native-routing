<?php

$project_location = "/php-native-routing";
$viewDir = '/views/';

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '':
    case $project_location.'/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case $project_location.'/users':
        require __DIR__ . $viewDir . 'users.php';
        break;

    case $project_location.'/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
