<!DOCTYPE html>
<html>
<head>
    <title>welcome</title>
</head>
<body>
    <p>欢迎登陆<?php echo $_COOKIE['uname'];setcookie('uanme','',time()-60*60);?></p>
</body>
</html>