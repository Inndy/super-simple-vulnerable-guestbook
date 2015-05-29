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
        <h1>Password Hash Utility</h1>
        <form action="./?mod=hash" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input id="password" type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="hash">Hash:</label>
                            <span class="small">empty for calculate hash</span>
                        </td>
                        <td><input id="hash" type="text" name="hash"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Submit</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
</body>
</html>
