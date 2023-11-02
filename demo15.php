<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="200" border="1">
        <tr>
            <td>用户名</td>
            <td>密码</td>
            <td>是否单身</td>
            <?php
            // $add = array(
            //     $user1 = array("user" => "张三", "upwd" => "123456", "ds" => "单身"),
            //     $user2 = array("user" => "李四", "upwd" => "123456", "ds" => "单身"),
            //     $user3 = array("user" => "王五", "upwd" => "123456", "ds" => "已婚"),
            // );
            // foreach ($add as $k => $v) {
            //     echo "<tr>";
            //     echo "<td>" . $v["user"] . "</td>";
            //     echo "<td>" . $v["upwd"] . "</td>";
            //     echo "<td>" . $v["ds"] . "</td>";
            //     echo "</tr>";
            // }
            ?>
            <?php
            $add = array(
                $user1 = array("user" => "张三", "upwd" => "123456", "ds" => "单身"),
                $user2 = array("user" => "李四", "upwd" => "123456", "ds" => "单身"),
                $user3 = array("user" => "王五", "upwd" => "123456", "ds" => "已婚"),
            );
            foreach ($add as $k => $v) {
                echo "<tr>";
                foreach ($v as $k2 => $v2) {
                    echo "<td>" . $v2 . "</td>";
                }
                echo "</tr>";
                echo "<br>";
            }

            ?>
        </tr>
    </table>
</body>

</html>