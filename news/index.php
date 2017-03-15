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
        include ('pagination.php');
        $phpfile = 'index.php';
        //$page = isset($_GET['page']) ? intval($_GET['page']) : 1;//当前页

        //连接数据库
        $con = mysqli_connect(HOST,USER,PWD);
        if(!$con){
            echo '数据库连接失败'.mysqli_error($con);
            exit;
        }
        mysqli_select_db($con,DBNAME);

        //$pageSize = 5;//每页显示条数
        $sql1 = "SELECT * FROM news";
        $res = mysqli_query($con,$sql1);
        $totalNum = mysqli_num_rows($res);//总条数
        //$totalPageCount = ceil($totalNum/$pageSize);//总页数

        $nowPage = isset($_GET['page']) ? intval($_GET['page']) : 1;//当前页
        //$prePage = ($nowPage-1<=0) ? 1 : $nowPage-1;//上一页
        //$nextPage = ($nowPage+1>=$totalPageCount) ? $totalPageCount : $nowPage+1;//下一页

        //偏移量
        //$offset = ($nowPage-1)*$pageSize;

        $getpageinfo = pagination($nowPage,$totalNum,$phpfile);


        //操作
        $sql = "SELECT id,title,author,content,addtime FROM news ORDER BY addtime DESC";

        $sql .= $getpageinfo['sqllimit'];
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
        echo '<tr align="center"><td colspan="5">';

        echo $getpageinfo['pagecode']; //显示分页的html代码

//        echo "<a href=\"".$_SERVER['PHP_SELF']."?page=1\">首页</a>";
//
//        if($nowPage !=1){
//            echo "<a href='".$_SERVER['PHP_SELF']."?page=".$prePage."'>上一页</a>";
//
//        }
//        for($i=1;$i<=$totalPageCount;$i++){
//            echo "<a href='".$_SERVER['PHP_SELF']."?page=".$i."'>".$i."</a>";
//        }
//
//        if($nowPage != $totalPageCount){
//            echo "<a href='".$_SERVER['PHP_SELF']."?page=".$nextPage."'>下一页</a>";
//        }
//
//
//        echo "<a href='".$_SERVER['PHP_SELF']."?page=".$totalPageCount."'>尾页</a>";
        echo '</tr></td>';
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