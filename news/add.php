<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加新闻</title>
</head>
<body>
<center>
    <?php include ('menu.php');?>
    <form action="action.php?action=add" method="post">
        <table>
            <tr>
                <td align="right">新闻标题:</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td align="right">作者:</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td align="right" valign="top">内容:</td>
                <td><textarea name="content" rows="8" cols="25"></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" value="添加">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>