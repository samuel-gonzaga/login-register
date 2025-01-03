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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/login-register/app/views/css/base.css">
    <link rel="stylesheet" href="/login-register/app/views/css/home.css">
    <title>Notícias</title>
</head>
<body>
<?php include "templates/header.php"?>
<main>
    <section class="welcome-section">
        <h1 class="greeting"><?php echo getGreetingMessage(getSessionValue('username')); ?></h1>
    </section>
    <section class="posts-section">
        <div class="container">
            <?php if (isset($posts) && !empty($posts)): ?>
                <ul class="posts-list">
                    <?php foreach ($posts as $post): ?>
                        <li class="post-item">
                            <h2 class="post-title"><?php echo htmlspecialchars($post['title']); ?></h2>
                            <p class="post-content"><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                            <p class="post-meta">
                                <em>Publicado por: <?php echo htmlspecialchars($post['author']); ?> em <?php echo $post['created_at']; ?></em>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="no-posts">Não há posts disponíveis.</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php include "templates/footer.php"; ?>