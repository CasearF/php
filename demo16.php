<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./demo17.php" method="post">
        <input type="text" name="name" id="" value="<?php echo $_COOKIE["acookie"] ?>"><br>
        <input type="text" name="password" id="" value="<?php echo $_COOKIE["cookie"] ?>"><br>
        <input type="checkbox" name="ucb" id="" value="on">记住密码<br>
        <input type="submit" value="提交"><br>
        上次登录时间<?php echo $_COOKIE["bcookie"]; ?>
    </form>
</body>

</html>