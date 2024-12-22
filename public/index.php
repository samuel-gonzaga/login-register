<?php
session_start();

require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/controllers/Controller.php';
require_once __DIR__ . '/../app/controllers/LoginController.php';
require_once __DIR__ . '/../app/controllers/RegisterController.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/LogoutController.php';
require_once __DIR__ . '/../app/models/User.php';
require_once __DIR__ . '/../app/models/Post.php';
require_once __DIR__ . '/../app/helpers/session.php';  // Helper de sessão
require_once __DIR__ . '/../app/router.php'; // Função de roteamento

$url = isset($_GET['url']) ? $_GET['url'] : 'login';

route($url, $db);
