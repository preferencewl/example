<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新闻管理系统</title>
</head>
<body>
<center>
<?php include('menu.php');?>
<table width="80%" border="1">
    <tr>
        <th>新闻ID</th>
        <th>新闻标题</th>
        <th>作者</th>
        <th>添加时间</th>
        <th>操作</th>
    </tr>
    <?php
        //导入配置文件
        include ('dbconfig.php');
        //连接数据库
        $con = mysqli_connect(HOST,USER,PWD);
        if(!$con){
            echo '数据库连接失败'.mysqli_error($con);
            exit;
        }
        mysqli_select_db($con,DBNAME);
        //操作
        $sql = "SELECT id,title,author,content,addtime FROM news ORDER BY addtime DESC ";
        $result = mysqli_query($con,$sql);
        //遍历输出
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr align="center">';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['author'].'</td>';
            echo '<td>'.date('Y-m-d',$row['addtime']).'</td>';
            echo '<td><a href="javascript:dodel('.$row['id'].')">删除</a>|<a href="edit.php?id='.$row['id'].'">修改</a></td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        mysqli_close($con);
    ?>
</table>
</center>
</body>
</html>
<script type="text/javascript" language="javascript">
    function dodel(id){
        if(confirm('确定要删除吗?')){
            window.location.href = 'action.php?action=del&id='+id;
        }
    }
</script>