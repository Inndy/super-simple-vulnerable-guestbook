<?php
    $sql = "INSERT INTO `posts` VALUES(NULL, '{$_POST['title']}', '{$_POST['content']}', NOW())";
    $result = $conn->query($sql) ? 'Success' : 'Failed';

    require(APP_ROOT . '/templates/post-result.php');
