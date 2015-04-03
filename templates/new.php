<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
    <?php require(APP_ROOT . '/templates/header.php'); ?>
    <section class="main">
        <h1>New Post</h1>
        <form action="/?mod=post" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td><label for="title">Title:</label></td>
                        <td><input id="title" type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td><label for="content">Content:</label></td>
                        <td><textarea id="content" name="content" rows="10"></textarea></td>
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
