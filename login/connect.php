<?php
	$host = 'localhost';//主机名
	$username = 'root';//数据库用户名
	$password = '';//数据库密码

	$con = mysqli_connect($host,$username,$password);//连接数据库

	if(!$con){
		die('数据库连接失败!'.mysqli_error($con));//如果连接数据库失败，则输出错误
	}

	mysqli_select_db($con,'test');//选择数据库
?>