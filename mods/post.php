<?php if(!isset($conn)) die;
    // sql injection vulnerable
    // payload (content): Do you like y2k bug?', '2000-01-01 00:00:00'), (NULL, 'TITLE', 'CONTENT
    $sql = "INSERT INTO `posts` VALUES(NULL, '{$_POST['title']}', '{$_POST['content']}', NOW())";
    $result = $conn->query($sql) ? 'Success' : 'Failed';

    require(APP_ROOT . '/templates/post-result.php');
