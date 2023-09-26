<?php
$username = $_POST["username"];
$password = $_POST["password"];
$xingbie = $_POST["xingbie"];
$danxuan = $_POST["danxuan"];
if ($danxuan == true) {
    echo "用户名是;$username<br>";
    echo "密码是;$password<br>";
    echo "性别是;$xingbie<br>";
    echo "您已同意协议";
} else {
    echo "您还未同意协议，请勾选同意协议";
}
#
?>