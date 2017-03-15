<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<?php
include ('menu.php');
//导入数据库配置文件
include ('dbconfig.php');
$con = mysqli_connect(HOST,USER,PWD);
if(!$con){
    echo '连接数据库失败'.mysqli_error($con);
    exit;
}
mysqli_select_db($con,DBNAME);
$sql = "SELECT * FROM news WHERE id=".$_GET['id'];
$result = mysqli_query($con,$sql);
$rows = mysqli_fetch_assoc($result);
mysqli_close($con);
?>
    <form action="action.php?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $rows['id']?>">
        <table>
            <tr>
                <td align="right">新闻标题:</td>
                <td><input type="text" name="title" value="<?php echo $rows['title']?>"></td>
            </tr>
            <tr>
                <td align="right">作者:</td>
                <td><input type="text" name="author" value="<?php echo $rows['author']?>"></td>
            </tr>
            <tr>
                <td align="right" valign="top">内容:</td>
                <td><textarea name="content" rows="8" cols="25"><?php echo $rows['content']?></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" value="添加">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></td>
            </tr>
        </table>

    </form>
</center>
</body>
</html>



