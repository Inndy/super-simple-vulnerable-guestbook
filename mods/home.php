<?php
    $result = $conn->query('SELECT * FROM `posts`');
    if ($result->num_rows == 0) {
        require('templates/no-data.php');
    } else {
        require('templates/home.php');
    }
