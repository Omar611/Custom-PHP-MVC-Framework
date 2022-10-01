<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;



$app = new Application();

$app->router->get('/', function() {
    return 'Hello From root rout!';
});

$app->router->get('/contact', function() {
    return 'Contact Page :)';
});

$app->run();