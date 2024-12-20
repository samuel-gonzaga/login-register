<?php
session_start();

require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/controllers/Controller.php';
require_once __DIR__ . '/../app/router.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'register';

route($url, $db);