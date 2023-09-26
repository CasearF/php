<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a {
            width: 150px;
            height: 30px;
        }
    </style>
</head>

<body>
    <?php
    $xuehao = $_POST["xuehao"];
    $name = $_POST["name"];
    $banji = $_POST["banji"];
    #echo "$banji $name $xuehao";
    $shuzu = array($xuehao, $name, $banji);
    for ($i = 0; $i < count($shuzu); $i++) {
        #echo $shuzu[$i
    }
    ?>
    <table border=1px>
        <tr>
            <td class="a">序号</td>
            <td class="a">学号</td>
            <td class="a">姓名</td>
            <td class="a">班级</td>
        </tr>
        <tr>

            <td class="a"><?php echo $xuhao; ?></td>
            <td class="a"><?php echo $xuehao; ?></td>
            <td class="a"><?php echo $name; ?></td>
            <td class="a"><?php echo $banji; ?></td>
        </tr>
    </table>

</body>

</html>