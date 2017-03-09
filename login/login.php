<?php
    /*检测是否有submit操作*/
	if(!isset($_POST['sub'])){
        echo '错误执行!';
    }
    if(isset($_POST['uname'])){
        $uname = $_POST['uname'];//post获取表单里的uname
    }
    if(isset($_POST['pwd'])){
        $pwd = $_POST['pwd'];//post获取表单里的pwd
    }

    include ('connect.php');//链接数据库
    if($uname && $pwd){//如果用户名和密码不为空
        $sql = "SELECT username,password FROM user WHERE username = '$uname' and password = '$pwd'";//检测数据库里是否存在对应的username和password的sql语句
        $result = mysqli_query($con,$sql);//执行sql语句
        $row = mysqli_num_rows($result);//返回结果集中的行数 0 或 1
        if($row){
            echo "<script>alert('登录成功');</script>";
            header("refresh:0;url=welcome.html"); //如果成功则跳转到welcome.html页面
            exit();
        }else{
            echo "<script>alert('用户名或密码错误')</script>";
            echo "
                    <script>setTimeout(function() {
                    window.location.href = 'login.html';
                    },1000)</script>
                ";
        }
    }else{//如果用户名或密码为空
        echo "<script>alert('用户名或密码不能为空');</script>";
        echo "
                <script>setTimeout(function() {
                    window.location.href = 'login.html';
                },1000)</script>
            ";
    }
    mysqli_close($con);
