<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
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
    $xuhao = 1;
    #echo "$banji $name $xuehao";
    $shuzu = array($xuhao, $xuehao, $name, $banji);
    echo
    "    
    <table border=1px>
    <tr>
        <td>序号</td>
        <td>学号</td>
        <td>姓名</td>
        <td>班级</td>
    </tr>
    ";
    for ($i = 0; $i < count($shuzu); $i++) {
        echo "<td>" . $shuzu[$i] . "</td>";
        #$xuhao++;
    }
    echo "</tr>";
    echo "</table>";
    #
    #                       _oo0oo_
    #                      o8888888o
    #                      88" . "88
    #                      (| -_- |)
    #                      0\  =  /0
    #                    ___/`---'\___
    #                  .' \\|     |// '.
    #                 / \\|||  :  |||// \
    #                / _||||| -:- |||||- \
    #               |   | \\\  - /// |   |
    #               | \_|  ''\---/''  |_/ |
    #               \  .-\__  '-'  ___/-. /
    #             ___'. .'  /--.--\  `. .'___
    #          ."" '<  `.___\_<|>_/___.' >' "".
    #         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
    #         \  \ `_.   \_ __\ /__ _/   .-` /  /
    #     =====`-.____`.___ \_____/___.-`___.-'=====
    #                       `=---='
    #
    #
    #     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    #
    #           佛祖保佑     永不报错     永无BUG
    ?>

    </table>

</body>

</html>