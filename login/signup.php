<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<link type="text/css" rel="stylesheet" href="css/signup.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<!--内容开始-->
	<div class="content">
		<div class="loginForm">
			<form class="form" action="signupprocess.php" method="post" onsubmit="return vali()">
				<p class="username"><label>username:</label><span class="msg_uname"></span><input type="text" name="uname" id="uname" placeholder="username"></p>
				<p class="pwd"><label>password:</label><span class="msg_pwd"></span><input type="password" name="pwd" id="pwd" placeholder="password"></p>
				<p class="sign-up"><input class="sub" type="submit" name="sub" value="Sign up"><input class="check" type="checkbox" name="check" >记住我</p>
			</form>
		</div>
	</div>
	<!--内容结束-->
	<!--底部开始-->
	<div class="footer">

	</div>
	<!--底部结束-->
</body>
</html>
<script type="text/javascript" language="javascript">
	function vali(){
		var uname = document.getElementById('uname');
		var pwd = document.getElementById('pwd');
		if(uname.value == '' && pwd.value == ''){
			alert('用户名密码不能为空');
			uname.focus();
			return false;
		}else if(uname.value == ''){
			alert('用户名不能为空');
			uname.focus();
			return false;
		}else if (pwd.value == ''){
			alert('密码不能为空');
			pwd.focus();
			return false;
		}
		if(uname.value.length < 4 || uname.value.length > 15){
			alert('用户名在4到15个字符之间');
			uname.focus();
			return false;
		}
	}
</script>