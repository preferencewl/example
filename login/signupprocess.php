<?php
/*检测是否有submit操作*/
if(!isset($_POST['sub'])){
	exit('执行错误!');
}
if(isset($_POST['uname'])){
	$uname = $_POST['uname'];//post获取表单里的uname
}
if(isset($_POST['pwd'])){
	$pwd = $_POST['pwd'];//post获取表单里的pwd
}

if(strlen($uname) < 4 || strlen($uname) > 15){
	echo "<script>alert('用户名在4到15个字符之间');</script>";
	exit();
}


include('connect.php');//连接数据库

$sql2 = "SELECT username FROM user WHERE username ='$uname'";//是否有相同的用户名

$result2 = mysqli_query($con,$sql2);//执行sql语句

$row = mysqli_num_rows($result2);//返回结果集的行数
if($row){//如果行数大于0
    echo "<script>alert('用户名已存在');setTimeout(window.location.href='signup.php',1000);</scrip>";
}
$sql = "INSERT INTO user(username,password) VALUES ('$uname','$pwd')";//向数据库插入表单传来的值
$result = mysqli_query($con,$sql);//执行sql语句
if(!$result){
	exit('Error:'.mysqli_error($con));//如果sql执行失败，输出错误
}else{
	echo "<script type='text/javascript'>alert('注册成功');
            
           // window.location.href = 'login.php';
            setTimeout(window.location.href='login.php',2000);
            
        </script>";

}
mysqli_close($con);//关闭数据库
