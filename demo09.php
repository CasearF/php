<?php
$a = date('Y-m-d H:i:s' , time());
$b =date('N');
$c =date("a");
$xq = array("日","一","二","三","四","五","六");
echo $a ,"下午好 今天是星期",$xq[date($b)]  ;
#echo "星期",$xq[date("w",time())],"&nbsp";
date_default_timezone_set('Asia/Shanghai');
if ($c=='am') {
    echo"上午好";
}
elseif ($c=='pm') {
    echo"下午好";
}
?>
