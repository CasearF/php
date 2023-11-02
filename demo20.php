<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script></script>
</head>

<body>
    
    <form action="./demo21.php" method="post">
        账号<input type="text" name="name" id="" value="<?php echo $_COOKIE["acookie"] ?>"><br>
        密码<input type="text" name="password" id="" value="<?php echo $_COOKIE["cookie"] ?>"><br>
        <input type="text" name="yzm" id="" placeholder="请填写验证码"><br>
        <img id="img1" src="./demo19.php">
        <input type="checkbox" name="ucb" id="" value="on">记住密码<br>
        <input type="submit" value="提交">
        <input type="reset" value="重置" >
        <p style="color: brown;" onclick="aa()">看不清，换一张</p><br>
        上次登录时间<?php echo $_COOKIE["bcookie"]; ?>
    </form>
    <script>
        function aa(){
            alert("确认刷新验证码")
            document.getElementById('img1').src="demo19.php?t="+Math.random()
        }
    </script>
</body>
</html>