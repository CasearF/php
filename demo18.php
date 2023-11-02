<?php

//设置图片大小，这里是120x40

$image_width = 120;

$image_height = 40;

 

//创建画布

$image = imagecreatetruecolor($image_width, $image_height);

 

//设置背景色为白色

$bg_color = imagecolorallocate($image, 255, 255, 255);

imagefill($image, 0, 0, $bg_color);

 

//生成随机字符串

$code = "";

$charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$charset_length = strlen($charset);

 

for ($i = 0; $i < 4; $i++) {

    $rand_index = rand(0, $charset_length - 1);

    $rand_char = substr($charset, $rand_index, 1);

    $code .= $rand_char;

}

 

//将字符串渲染到图像中

$font_size = 20;

$font_color = imagecolorallocate($image, 0, 0, 0);

 

$x = 10;

$y = ($image_height - $font_size) / 2;

for ($i = 0; $i < 4; $i++) {

    $char = substr($code, $i, 1);

    imagettftext($image, $font_size, rand(-10, 10), $x, $y, $font_color, "arial.ttf", $char);

    $x += $font_size + rand(-5, 5);

}

 

//添加干扰线、干扰点等

for ($i = 0; $i < 6; $i++) {

    $line_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));

    imageline($image, rand(0, $image_width), rand(0, $image_height), rand(0, $image_width), rand(0, $image_height), $line_color);

}

 

for ($i = 0; $i < 50; $i++) {

    $point_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));

    imagesetpixel($image, rand(0, $image_width), rand(0, $image_height), $point_color);

}

 

//输出图像

header("Content-type:image/png");

imagepng($image);

 

//销毁图像

imagedestroy($image);

?>