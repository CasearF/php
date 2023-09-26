 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>demo04</title>
 </head>

 <body>
     <form action="demo04.php" method="post">
         <label>输入第一个数</label>
         <input type="text" name="one">
         <br>
         <label>+</label>
         <input type="radio" name="yunsuan" value="+">
         <label>-</label>
         <input type="radio" name="yunsuan" value="-">
         <label>*</label>
         <input type="radio" name="yunsuan" value="*">
         <label>/</label>
         <input type="radio" name="yunsuan" value="/">
         <br>
         <label>输入第二个数</label>
         <input type="text" name="two">
         <br>
         <input type="submit" value="计算">
     </form>
    <?php
       $one = $_POST["one"];                     #通过post获取第一个数
       $two = $_POST["two"];                     #通过post获取第二个数
       $yunsuan = $_POST["yunsuan"];             #通过post获取选择的运算符
       $jieguo = "";                             #定义结果变量，定义为空
       if ($one && $two && $yunsuan)             #通过if函数判断三个变量是否为空，如果为空则跳过
       {                                         #通过Switch判断变量$yunsuan，如果为+则运行+下的代码，用break跳出循环
           switch ($yunsuan) {
               case '+':
                   $jieguo = $one + $two;
                   break;
               case '-':
                   $jieguo = $one - $two;
                   break;
               case '*':
                   $jieguo = $one * $two;
                   break;
               case '/':
                   $jieguo = $one / $two;
                   break;
           }
       }
       echo "结果是：$jieguo";                    #输出结果
       ?>
     <?php
        $one = $_POST["one"];                     #通过post获取第一个数
        $two = $_POST["two"];                     #通过post获取第二个数
        $yunsuan = $_POST["yunsuan"];             #通过post获取选择的运算符
        $jieguo = "";                             #定义结果变量，定义为空
        if ($one && $two && $yunsuan)             #通过if函数判断三个变量是否为空，如果为空则跳过
        {                                         #通过Switch判断变量$yunsuan，如果为+则运行+下的代码，用break跳出循环
            if ( $yunsuan=="+") {
                $jieguo = $one + $two;
            }
            if ($yunsuan=="-") {
                $jieguo = $one - $two;
            }
            if ($yunsuan=="*") {
                $jieguo = $one * $two;
            }
            if ($yunsuan=="/") {
                $jieguo = $one / $two;
            }
        }

        echo "结果是：$jieguo";                    #输出结果
        ?>
 </body>

 </html>