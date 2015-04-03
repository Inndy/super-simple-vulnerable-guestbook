<?php
    error_reporting(E_ALL ^ E_NOTICE);
    define('DS', DIRECTORY_SEPARATOR);
    define('APP_ROOT', dirname(__FILE__) . DS);
    require('config.php');

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
        case 'read': require('mods/read.php'); break;
        // new post form
        case 'new': require('templates/new.php'); break;
        // post new message
        case 'post': require('mods/post.php'); break;
        // something interesting
        case 'hack': require('templates/hack.php'); break;
        // home page
        default: require('mods/home.php');
    }
