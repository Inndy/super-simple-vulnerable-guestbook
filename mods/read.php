<?php if(!isset($conn)) die;
    if (isset($_GET['id'])) {
        // Injectable
        $result = $conn->query('SELECT * FROM `posts` WHERE `pid` = ' . $_GET['id']);
        if ($result->num_rows == 0) {
            require(APP_ROOT . 'templates/no-data.php');
        } else {
            $post = $result->fetch_assoc();
            require(APP_ROOT . 'templates/single-post.php');
        }
    }
