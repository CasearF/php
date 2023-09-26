<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="./demo2.php" method="get">
<body>
    <table border="1px">
        
        <tr>
            <td>物品名称</td>
            <td>购买数量</td>
            <td>商品价格</td>
        </tr>

        <tr>
            <td>香蕉</td>
            <td>
                <input type="number" name="bnum" id="">
            </td>
            <td>
                <input type="number" name="bprice" id="">
            </td>
        </tr>

        <tr>
            <td>苹果</td>
            <td>
                <input  type="number" name="pg" id="">
            </td>
            <td>
                <input type="number" name="pgjg" id="">
            </td>
        </tr>

        <tr>
            <td>橘子</td>
            <td>
                <input type="text" name="jz" id="">
            </td>
            <td>
                <input type="text" name="jzjg" id="">
            </td>
        </tr>

        <tr>
            <td colspan="3">商品折扣0.8</td>
        </tr>
        <tr>
            <td colspan="3"> <input type="submit" value="确认"> 打折后商品的总价格：
        <?php
            $mynum = $_GET["bnum"];
            $myprice = $_GET["bprice"];

            $mypg = $_GET["pg"];
            $mypgjg = $_GET["pgjg"];

            $chengxj = $mynum * $myprice;
            $chengpg = $mypg * $mypgjg;

            $cheng = $chengxj + $chengpg;

            echo $cheng;
        ?>
        </td>
        </tr>
        </form>

    </table>

</body>

</html>