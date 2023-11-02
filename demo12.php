<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="demo13.php" method="post" enctype="multipart/form-data">
        <table>
            <thead> <!-- 表头 -->
                <tr>
                    <th>姓名</th>
                    <th><input type="text" name="name"></th>
                </tr>
            </thead>
            <tbody> <!-- 表格主体 -->
                <tr>
                    <td>毕业院校</td>
                    <td><input type="text" name="school"></td>
                </tr>
                <tr>
                    <td>性别</td>
                    <td> <label class="radio-label">男</label>
                        <input class="radio-input" type="radio" name="xingbie" value="男">
                        <label class="radio-label">女</label>
                        <input class="radio-input" type="radio" name="xingbie" value="女">
                    </td>
                </tr>
                <tr>
                    <td>头像上传</td>
                    <td><input type="file" name="file" id="file" value="选择头像"><br></td>
                </tr>
                <tr>
                    <td><input type="submit" value="提交" name="sousuo"></td>
                    <td><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>