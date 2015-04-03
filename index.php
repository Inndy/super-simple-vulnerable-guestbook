<?php
    error_reporting(E_ALL ^ E_NOTICE);
    define('DS', DIRECTORY_SEPARATOR);
    define('APP_ROOT', dirname(__FILE__) . DS);
    require(APP_ROOT . 'config.php');

    function error($msg)
    {
        header('Content-Type: text/plain; charset=utf8');
        die('Error: ' . (string)$msg);
    }

    $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);

    if ($conn->connect_errno) {
        error("Connect failed: " . $conn->connect_error);
    }

    $mod = strtolower($_GET['mod'] ?: 'main');
    switch ($mod) {
        // read message
        case 'read': require(APP_ROOT . 'mods/read.php'); break;
        // new post form
        case 'new': require(APP_ROOT . 'templates/new.php'); break;
        // post new message
        case 'post': require(APP_ROOT . 'mods/post.php'); break;
        // something interesting
        case 'hack': require(APP_ROOT . 'templates/hack.php'); break;
        // password hash
        case 'hash': require(APP_ROOT . 'mods/hash.php'); break;
        // home page
        default: require(APP_ROOT . 'mods/home.php');
    }
