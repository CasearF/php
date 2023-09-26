<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo02</title>
</head>

<body>

    <div style="width: 800px; height: 500px; ">
        <div style="float: left;">分数：</div>
        <div style="width: 300px;float: left;">
            <form action="demo02.php" method="post">
                <input type="text" name="shuzi" max="100" min="0">
                <input type="submit" value="搜索" name="sousuo">
            </form>
        </div>
        <div style="float: left;">
            <?php
            $shuzi = $_POST['shuzi'];                      #使用$_POST全局变量获取表单中提交的数据
            if ($shuzi >= "90"  && $shuzi <= "100")           #使用if循环判断是否达到成绩线
            {
                echo "学生的分数是： $shuzi 可以升本";       #如果达到了，则运行输出，如果达不到就运行下一个循环
            }
            elseif ($shuzi >= "80" && $shuzi <= "89") {
                echo "学生的分数是： $shuzi 可以获得奖学金";
            }
            elseif ($shuzi >= "70" && $shuzi <= "79") {
                echo "学生的分数是： $shuzi 可以免费获得试卷一套";
            }
            elseif ($shuzi < "70") {
                echo "学生的分数是： $shuzi 学生成绩必须是100-70分";
            }

            ?>
        </div>
    </div>


</body>

</html>