<?php
    $result = $conn->query('SELECT * FROM `posts`');
    if ($result->num_rows == 0) {
        require(APP_ROOT . 'templates/no-data.php');
    } else {
        require(APP_ROOT . 'templates/home.php');
    }
