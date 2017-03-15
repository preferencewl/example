<?php
//导入数据库配置文件
include ('dbconfig.php');
//连接数据库
$con = mysqli_connect(HOST,USER,PWD);
if(!$con){
    echo '数据库连接失败'.mysqli_error($con);
    exit;
}
mysqli_select_db($con,DBNAME);
//执行操作
switch ($_GET['action']){
    case 'add':
        //获取添加信息
        $title = ltrim($_POST['title']);
        $author = trim($_POST['author']);
        $content = $_POST['content'];
        $time = time();
        //添加数据库
        $sql = "INSERT INTO news(title,author,content,addtime) VALUES ('{$title}','{$author}','{$content}','{$time}')";
        //echo $sql;die;
        $result = mysqli_query($con,$sql);
        $id = mysqli_insert_id($con);
        if($id){
            echo '添加成功';
            header("refresh:1;url=index.php");
        }else{
            echo '添加失败';
            header("refresh:1;url=add.php");
        }
        break;
    case 'del':
        $id = $_GET['id'];
        $sql = "DELETE FROM news where id=$id ";
        $result = mysqli_query($con,$sql);
        header("refresh:1;url=index.php");
        break;
    case 'update':
        $id = $_POST['id'];
        $title = ltrim($_POST['title']);
        $author = trim($_POST['author']);
        $content = $_POST['content'];

        $sql = "UPDATE news SET title = '{$title}',author = '{$author}',content = '{$content}' WHERE id=".$id;
        $result = mysqli_query($con,$sql);
        if(!$result){
            echo '更新失败';
            header("refresh:1;url=edit.php");
        }else{
            echo '更新成功';
            header('refresh:1;url=index.php');
        }

}
mysqli_close($con);