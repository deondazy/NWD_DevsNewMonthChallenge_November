<!doctype html>
<html>
    <head>
        <title>PHP version - NWD_DevsNewMonthChallenge_November</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>NWD_DevsNewMonthChallenge_November</h1>

        <h3>PHP version</h3>

        <a href="with-javascript.php">JavaScript version</a>

        <p>Type a message containing any number of @name mentions into the box
        below</p>

        <form method="post">
            <textarea placeholder="eg: Hello @deon" name="textarea" rows="10" cols="50"></textarea>
            <input type="submit" value="Post">
        </form>

        <?php
        include __DIR__ .'/function.php';

        if ('POST' == $_SERVER['REQUEST_METHOD']) {
            echo parseNames($_POST['textarea']);
        }
        ?>
    </body>
</html>
