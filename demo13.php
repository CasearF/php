<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php
    $Name = $_POST["name"];
    $school = $_POST["school"];
    $xingbie = $_POST["xingbie"];
    $name = $_FILES["file"]["name"];
    $lujing = "./img/$name";
    if (isset($name)) {
        $tmplj = $_FILES["file"]["tmp_name"];
        $size = $_FILES["file"]["size"];
        $errot = $_FILES["file"]["errot"];
        $type = $_FILES["file"]["type"];
        $suffix = substr($type, strrpos($type, '/') + 1);
        // echo $type;
        // echo $suffix;

        if ($suffix == "png" || $suffix == "jpg" || $suffix == "jpeg") {
            move_uploaded_file($_FILES["file"]["tmp_name"], './img/' . $_FILES["file"]["name"]);
            // echo $_FILES["img"];
            // echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
            // echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
            // echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            // echo "文件存储的位置: " . $tmplj;
        } else {
            echo "错误," . $size . "kb" . '<br>';
        }
    }
    ?>
    <table>
        <thead>
            <div>
                <div>
                    <table>
                        <tr>
                            <td>姓名</td>
                            <td><?php echo $Name; ?></td>
                        </tr>
                        <tr>
                            <td>院校</td>
                            <td><?php echo $school; ?></td>
                        </tr>
                        <tr>
                            <td>性别</td>
                            <td><?php echo $xingbie; ?></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <img style="width: 300px;height: 300px;	overflow: hidden;" src="<?php echo $lujing ?>">
                </div>
            </div>
        </thead>
    </table>
</body>

</html>