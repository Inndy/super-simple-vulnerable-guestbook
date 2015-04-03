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
        <h1>Result: <?php echo $result; ?></h1>
    </section>
</body>
</html>
