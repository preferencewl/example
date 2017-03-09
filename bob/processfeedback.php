<?php

//create short variable names
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

//设置静态信息
$toaddress = "1509067588@qq.com";

$subject = "Feedback from web site.";

$mailcontent = "Customer name:".$name."\n".
				"Customer email:".$email."\n".
				"Customer comments:\n".$feedback."\n";

$fromaddress = "From:webserver@example.com";

//发送邮件
//mail($toaddress, $subject, $mailcontent,$fromaddress);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted.</h1>
<p>Your feedback (shown below) has been sent.</p>
<p>Without nl2br</p>
<p><?php echo $mailcontent;?></p>
<p>With nl2br</p>
<p><?php echo nl2br($mailcontent);?></p>
</body>
</html>