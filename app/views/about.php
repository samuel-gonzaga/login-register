<?php
if (!isLoggedIn()) {
    redirect('login');
    exit;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/login-register/app/views/css/base.css">
    <link rel="stylesheet" href="/login-register/app/views/css/about.css">

    <title>About</title>
</head>
<body>
    <?php include "templates/header.php"?>
    <main>
        <section>
            <h1 id="about">Sobre o Projeto</h1>
            <p><b>Nome</b>: Login-Register</p>
            <p><b>Objetivo:</b></p>
            <p>Este site foi desenvolvido com o propósito de demonstrar funcionalidades básicas de autenticação e gerenciamento de usuários. Ele serve como um exemplo prático e educativo para quem deseja entender os conceitos fundamentais de login e registro.</p>
            <p><b>Funcionalidades Abordadas:</b></p>
            <ul>
                <li><b>Login:</b> Autenticação de usuários com credenciais previamente registradas.</li>
                <li><b>Register:</b> Registro de novos usuários com armazenamento seguro dos dados.</li>
                <li><b>Permanência de Dados:</b> Manutenção do estado do usuário durante a navegação.</li>
                <li><b>Logout:</b> Encerramento seguro da sessão do usuário.</li>

            </ul>
        </section>
    </main>
<?php include "templates/footer.php"; ?>
