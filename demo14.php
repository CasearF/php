<?php
$arr = array(
    array('type'=>"单床房","price"=>340),
    array('type'=>"标准间","price"=>360),
    array('type'=>"套房","price"=>640),
);
foreach ($arr as $k=>$v) { 
    foreach ($v as $k2=>$v2) {
        echo $v2;
    }
    echo"<br>";
}
?>