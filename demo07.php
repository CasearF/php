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
    ?>

    </table>

</body>

</html>