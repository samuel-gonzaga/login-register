<?php
require_once __DIR__ . '/../app/config/config.php';

require_once __DIR__ . '/../app/models/Post.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';


$homeController = new HomeController($db);

$request = str_replace('/login-register/public', '', $_SERVER['REQUEST_URI']);
$request = parse_url($request, PHP_URL_PATH);

if ($request === '/' || $request === '/home') {
    $homeController->index();
} else {
    http_response_code(404);
    echo "Página não encontrada!";
}