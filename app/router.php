<?php
function route($url, $db)
{
    switch ($url)
    {
        case 'login':
            $login = new LoginController($db);
            $errors = $login->validarLogin($_POST);
            require_once __DIR__ . '/../app/views/login.php';
            break;
        case 'register':
            $register = new RegisterController($db);
            $errors = $register->validarRegistro($_POST);
            require_once __DIR__ . '/../app/views/register.php';
            break;
        case 'home':
            $home = new HomeController($db);
            $posts = $home->index();
            require_once __DIR__ . '/../app/views/home.php';
            break;
        case 'about':
            require_once __DIR__ . '/../app/views/about.php';
            break;
        case 'logout':
            $logout = new LogoutController($db);
            $logout->logout();
            break;
        default:
            echo "Página não encontrada!";
            break;
    }
}