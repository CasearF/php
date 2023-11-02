<?php
$date = new DateTime("");
$datea = $date->format('Y-m-d H:i:s');
setcookie("bcookie", $datea, time() + 60 * 60 * 24 * 365, "/");
if ($_POST["ucb"] == "on") {
    $password = $_POST["password"];
    setcookie("cookie", $password, time() + 60, "/");
} else {
    setcookie("cookie", "", time() - 60, "/");
}
$name = $_POST["name"];
$password = $_POST["password"];
$cookie = $_COOKIE["cookie"];


echo "用户名" . $name . "密码" . $password . "<br>";
