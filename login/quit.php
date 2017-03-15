<?php
header("content-Type=text/html;charset=Utf-8");
setcookie('uname','',time()-60*60);
echo '退出成功';
echo "<script>setTimeout(function() {window.location.href='login.php'},1000);</script>";