<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuário</title>
</head>
<body>
    <main>
        <section>
            <h1>Registro de usuários</h1>
            <h2>Para ter acesso ao conteúdo exclusivo, realize seu registro.</h2>

            <form action="register" method="POST">
                <input type="text" name="username" placeholder="Nome" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit">Registrar</button>
            </form>

            <?php if (isset($errors) && !empty($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: red;"><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


        </section>
    </main>
</body>
</html>