<?php if(!isset($conn)) die;
    $user = $_POST['user'] ?: false;
    $pwd = $_POST['password'] ?: false;
    $pid = $_REQUEST['pid'] ?: false;

    if ($pid === false) {
        error('No pid specified');
    } else if ($user === false || $pwd === false) {
        require(APP_ROOT . '/templates/del-post.php');
    } else {
        // sql injection vulnerable, may cause to authentication bypass and information leakage
        // payload: ' UNION SELECT 0, 'admin', 'your-password-hash
        $sql = "SELECT * FROM `users` WHERE `name` = '{$user}'";
        $user_result = $conn->query($sql);
        if ($user_result->num_rows === 0) {
            error('User not found');
        }
        $user = $user_result->fetch_assoc();
        if (!password_verify($pwd, $user['pass'])) {
            error('Password not match');
        } else {
            // sql injection vulnerable, may cause to table-cleaned!
            // payload: 1 or 1 = 1
            $sql = "DELETE FROM `posts` WHERE `pid` = {$pid}";
            $result = $conn->query($sql) ?  "pid = {$pid} was deleted" : "Failed to delete";
            require(APP_ROOT . '/templates/post-result.php');
        }
    }
