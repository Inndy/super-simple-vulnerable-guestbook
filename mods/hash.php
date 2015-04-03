<?php if(!isset($conn)) die;
    /*
     * Use `password_hash` and `password_verify`, they are secure!
     */

    $pwd = $_POST['password'] ?: false;
    $hash = $_POST['hash'] ?: false;

    if ($pwd === false) {
        require(APP_ROOT . '/templates/post-password.php');
    } else if ($hash === false) {
        $result = password_hash($pwd, PASSWORD_BCRYPT);
        require(APP_ROOT . '/templates/post-result.php');
    } else {
        $result = password_verify($pwd, $hash) ? 'Match' : 'MisMatch';
        require(APP_ROOT . '/templates/post-result.php');
    }
