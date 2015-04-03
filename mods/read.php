<?php if(!isset($conn)) die;
    $pid = $_GET['id'] ?: false;
    if ($pid !== false) {
        // sql injection vulnerable, may cause to data leakage
        // payload: -1 UNION SELECT 1, 'TITLE', @@DATADIR, NOW()
        $result = $conn->query('SELECT * FROM `posts` WHERE `pid` = ' . $pid);
        if ($result->num_rows == 0) {
            require(APP_ROOT . 'templates/no-data.php');
        } else {
            $post = $result->fetch_assoc();
            require(APP_ROOT . 'templates/single-post.php');
        }
    }
