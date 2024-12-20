<?php
function route($url, $db)
{
    switch ($url)
    {
        case 'register':
            require_once __DIR__ . '/../app/controllers/RegisterController.php';
            $register = new RegisterController($db);
            $register->validarRegistro($_POST);
            require_once __DIR__ . '/../app/views/register.php';
            break;
        case 'home':
            require_once __DIR__ . '/../app/controllers/HomeController.php';
            $home = new HomeController($db);
            $posts = $home->index();
            require_once __DIR__ . '/../app/views/home.php';
            break;
        default:
            echo "Página não encontrada!";
            break;
    }
}