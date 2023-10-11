<?php
    #$a = $_POST["a"];
    #$shuzu = array("游泳", "篮球", "乒乓球");
    #foreach ($shuzu as $key => $value) {
    #    echo "<input type='radio' name='a'/>" . $value;
    #}
    $arr = array(120, 202, 366, 398, 599);
    $count = count($arr);
    $sum = array_sum($arr);
    $average = $sum / $count;    
    echo "数组中数的平均值为：" . $average;
    echo '<br>';
?>
<?php
    $arr1 = array(120, 202, 366, 398, 599);
    $sum = 0;
    foreach ($arr1 as $value) {
        $sum = $sum+$value;
    }
    echo $sum;
    echo '<br>';
    echo $sum/count($arr)
?>