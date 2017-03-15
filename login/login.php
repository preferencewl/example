<?php
header("content-Type:text/html;charset=Utf-8");
if(isset($_COOKIE['uname']) && $_COOKIE['uname'] != ''){
	echo "<script>setTimeout(function(){window.location.href = 'welcome.php'},5000);</script>";
}else {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>login</title>
		<link type="text/css" rel="stylesheet" href="css/login.css">
		<script type="text/javascript" language="JavaScript" src="js/jquery-3.1.1.min.js"></script>
	</head>
	<body>
	<!--内容开始-->
	<div class="content">
		<form class="form" action="loginprocess.php" method="post" onsubmit="return val()">
			<p>用户名:<input class="uname" type="text" name="uname" placeholder="用户名" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];}else{echo '';}?>"></p>
			<p>密&nbsp;&nbsp;&nbsp;码:<input class="pwd" type="password" name="pwd" placeholder="密码" value="<?php if(isset($_COOKIE['pwd'])){echo $_COOKIE['pwd'];}else{echo '';}?>"></p>
			<p><input class="check" type="checkbox" name="remember" <?php if(isset($_COOKIE['remember'])){echo 'checked';}else{echo '';}?>>记住我</p>
			<p><input class="sub" type="submit" name="sub" value="登录"></p>

		</form>
	</div>
	<!--内容结束-->
	</body>
	</html>
	<script type="text/javascript" language="javascript">
		function val() {
			var name = $(".uname");
			var pwd = $(".pwd");
			if(name.val() == ''){
				alert('用户名不能为空');
				name.focus();
				return false;
			}
			if(pwd.val() == ''){
				alert('密码不能为空');
				pwd.focus();
				return false;
			}
		}

	</script>
<?php
}
?>