<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
    <?php require(APP_ROOT . '/templates/header.php'); ?>
    <section class="main">
        <ul>
            <?php while ($post = $result->fetch_assoc()): ?>
            <li><a href="/?mod=read&id=<?php echo $post['pid'] ?>"><?php echo $post['title']?></a></li>
            <?php endwhile; ?>
        </ul>
    </section>
</body>
</html>
