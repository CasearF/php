<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>信息系学生登录页面</title>
</head>

<body>
    <h3>信息系学生登录页面</h3>
    <div>
        <form action="houduan.php" method="POST">

            用户名：<input type="text" name="username">用户名必填<br>
            密 码： <input type="password" name="password">密码为3位数字组成<br>
            <label class="radio-label">男</label>
            <input class="radio-input" type="radio" name="xingbie" value="男">
            <label class="radio-label">女</label>   
            <input class="radio-input" type="radio" name="xingbie" value="女">
            <br><input type="checkbox" name="danxuan" value= true >我已阅读<a href="/xieyi.html">登录协议</a>
            <input type="submit" value="提交"><br>

        </form>
        <!--<a href="register.html">注册</a>-->
    </div>
</body>

</html>