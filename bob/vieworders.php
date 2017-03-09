<?php
	//create short variable name
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

	$orders = file("$DOCUMENT_ROOT./bob/orders.txt");
	$number_of_orders = count($orders);
	if($number_of_orders == 0){
		echo "<p><strong>No Orders pending.Please try again later.</strong></p>";
	}
	for($i = 0;$i<$number_of_orders;$i++){
		echo $orders[$i]."<br />";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts - Customer Order</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php
		/**
			读取整个文件内容
		*/
		//使用readfile读取整个文件内容	
		// $order = readfile("$DOCUMENT_ROOT./bob/orders.txt");
		// echo $order;

		//使用fpassthru读取整个文件的内容,如果使用fpassthru读取文件，首先要用fopen打开文件
		// $fp = fopen("$DOCUMENT_ROOT./bob/orders.txt", "rb");
		// $order = fpassthru($fp);
		// echo $order;

		//使用file读取整个文件的内容，得到的是一个数组,每一行数据作为数组的一个元素
		// $order = file("$DOCUMENT_ROOT./bob/orders.txt");
		// print_r($order);

		//使用file_get_contents读取文件所有内容，返回的是个字符串
		// $order = file_get_contents("$DOCUMENT_ROOT./bob/orders.txt");
		// echo $order;

		/*
			一行一行读取文件内容
		*/
		// $fp = fopen("$DOCUMENT_ROOT./bob/orders.txt", 'rb');
		// if(!$fp){
		// 	echo "<p><strong>No orders pending.Please try again later.</strong></p>";
		// 	exit;
		// }

		// while(!feof($fp)){
		// 	$order = fgets($fp,999);//fgets、fgetss、fgetcsv
		// 	echo $order . "<br />";
		// }

		/*
			一个字符一个字符读取文件内容fgetc
		*/
		// $fp = fopen("$DOCUMENT_ROOT./bob/orders.txt", "rb");
		// while(!feof($fp)){
		// 	$char = fgetc($fp);
		// 	if(!feof($fp)){
		// 		echo ($char == "\n" ? "<br />" : $char);
		// 	}
		// }

		/*
			fread读取任意长度文件内容.filesize确定文件大小
		*/
		// $fp = fopen("$DOCUMENT_ROOT./bob/orders.txt", "rb");
		// $order = fread($fp, filesize("$DOCUMENT_ROOT./bob/orders.txt"));
		// echo nl2br($order);
		// fclose($fp);

		/*
			查看文件是否存在,file_exists
		*/
		// if(file_exists("$DOCUMENT_ROOT./bob/orders.txt")){
		// 	echo "exist";
		// }else{
		// 	echo "no";
		// }

		/*
			删除一个文件unlink
		*/
		//unlink("$DOCUMENT_ROOT./bob/order.txt");

		/*
			文件的定位
		*/
		// echo 'Final position of the file pointer is ' . (ftell($fp));//获取文件指针最后指向的位置
		// echo "<br />";
		// rewind($fp);//将文件指针恢复到文件的开始
		// echo 'After rewind,the position is ' . (ftell($fp));
		// echo '<br />';


	?>
</body>
</html>