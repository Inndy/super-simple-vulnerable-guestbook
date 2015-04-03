<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
    <?php require('header.php'); ?>
    <section class="main">
        <?php /* XSS Vulnerable */ ?>
        <h2>Post -- <?php echo $post['title']; ?></h2>
        <p><?php echo $post['content']; ?></p>
        <p class="time">at <?php echo $post['date']; ?></p>
    </section>
</body>
</html>
