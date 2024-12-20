<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/login-register/app/views/css/home.css">

    <title>Posts</title>
</head>
<body>
    <header>
        <nav>
            <h1>Notícias</h1>
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Posts</h1>
            <?php if (isset($posts) && !empty($posts)): ?>
                <ul>
                    <?php foreach ($posts as $post): ?>
                        <li>
                            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                            <p><em>Publicado por: <?php echo htmlspecialchars($post['author']) ?> em <?php echo $post['created_at']; ?></em></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Não há posts disponíveis.</p>
            <?php endif; ?>

        </section>
    </main>
<?php include "templates/footer.php"; ?>