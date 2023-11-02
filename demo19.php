<?php
session_start();
$img =imagecreate(100,30);
$imgcolor=imagecolorallocate($img,255,255,255);
$text_color = imagecolorallocate($img, 0, 0, 0);
for ($i = 0; $i < 3; $i++) {
    $color = imagecolorallocate($img, rand(8, 220), rand(80, 220), rand(80, 220));
    imageline($img, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $color);
}
$text_x = 10;
$text_y = 30;
$font_file = 'path/to/font.ttf';
$code = "";
for ($i = 0; $i < 2; $i++) {
    $fontsize = 6;
    $code .= chr(mt_rand(65, 90));  // 生成大写字母
    $code .= chr(mt_rand(97, 122));  // 生成小写字母
    $code .= chr(mt_rand(48, 57));  // 生成数字
    $fontcolor = imagecolorallocate($img, rand(0, 120), rand(0, 120), rand(0, 120));
    $x = imagesx($img) / 2 - strlen($code) * 16 / 2;
    $y =  imagesy($img) / 2 - 8;
}
imagestring($img, $fontsize, $x, $y, $code,$fontcolor);
$aa= imagettftext($img, 16, 0, $text_x, $text_y, $text_color, $font_file, $code);
$font_file = 'path/to/font.ttf';
$text_x = 200;
$text_y = 100;
imagettftext($image, 16, 0, $text_x, $text_y, $text_color, $font_file, $code);
ob_clean(); 
header('Content-Type: image/png');
imagepng($img);
$_SESSION['code'] = $code;
