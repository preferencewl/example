<?php
	//create short variable name
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
	//读取整个文件
	//每个订单都是数组中的一个元素
	$orders = file("$DOCUMENT_ROOT./bob/orders.txt");

	//数组元素个数
	$number_of_orders = count($orders);

	if($number_of_orders == 0){
		echo "<p><strong>No orders pending.Please try again later.</strong></p>";
	}
	echo "<table border=\"1\">\n";
	echo "<tr>
			<th bgcolor=\"#ccccff\">Order Date</th>
			<th bgcolor=\"#ccccff\">Tires</th>
			<th bgcolor=\"#ccccff\">Oil</th>
			<th bgcolor=\"#ccccff\">Spark Plugs</th>
			<th bgcolor=\"#ccccff\">Total</th>
			<th bgcolor=\"#ccccff\">Address</th>
		</tr>";

	for($i = 0; $i<$number_of_orders;$i++){
		//分割每一行
		$line = explode("\t", $orders[$i]);

		//确保订单只有数字
		$line[1] = intval($line[1]);
		$line[2] = intval($line[2]);
		$line[3] = intval($line[3]);

		//输出每个订单
		echo "<tr>
				<td>".$line[0]."</td>
				<td align=\"center\">".$line[1]."</td>
				<td align=\"center\">".$line[2]."</td>
				<td align=\"center\">".$line[3]."</td>
				<td align=\"center\">".$line[4]."</td>
				<td align=\"center\">".$line[5]."</td>	
				
			</tr>";
	}
	echo "</table>";
?>
</body>
</html>