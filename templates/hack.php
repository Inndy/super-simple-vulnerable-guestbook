<?php
    $file = realpath(APP_ROOT . ($_GET['file'] ?: $_SERVER['PHP_SELF']));
    if (strpos(dirname($file), realpath(APP_ROOT)) !== 0) {
        error('Hacker found!');
    }

    function walk($dir, $func) {
        $list = array_filter(scandir($dir), function ($name) { return $name[0] !== '.'; });
        $list = array_map(function ($name) use ($dir) { return $dir . DS . $name; }, $list);
        array_map($func, array_filter($list, is_file));
        array_map(function ($name) use ($func) {
            walk($name, $func);
        }, array_filter($list, is_dir));
    }
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
    <?php require(APP_ROOT . '/templates/header.php'); ?>
    <section class="main">
        <h2>Sorry, nothing here.</h2>
        <ul>
        <?php
            walk('.', function ($f) {
                $f = htmlspecialchars($f);
                echo "<li><a href=\"/?mod=hack&file=$f\">$f</a></li>";
            });
        ?>
        </ul>
        <h3>But the source code...</h3>
        <pre class="sourcecode"><?php highlight_file($file); ?></pre>
    </section>
</body>
</html>
