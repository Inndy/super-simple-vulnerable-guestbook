<?php if(!isset($conn)) die; ?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
    <?php require(APP_ROOT . '/templates/header.php'); ?>
    <section class="main">
        <h1>Del post</h1>
        <form action="/?mod=del" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td><label for="pid">Pid:</label></td>
                        <td><input type="text" name="pid" value="<?php echo $_REQUEST['pid'];?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label for="user">User:</label></td>
                        <td><input id="user" type="text" name="user"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input id="password" type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
</body>
</html>
