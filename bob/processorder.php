<?php
	//create short variable names
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	//$find = $_POST['find'];
	$address = $_POST['address'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];//系统根目录
	$date = date('H:i,jS F Y');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<?php
		echo "<p>Order Processed at " . date('H:i,jS F Y') . "</p>";
		echo "<p>Your order is as follows:</p>";

		$totalqty = 0;//订单数
		$totalamount = 0.00;//订单总额
		$totalqty = $tireqty + $oilqty + $sparkqty;//订单数

		//判断是否有订单
		if($totalqty == 0){
			echo "You did not order anything on the previous page!<br />";
		} else{
			if($tireqty > 0){
				echo $tireqty . "tires<br />";
			}
			if($oilqty > 0){
				echo $oilqty . 'battles of oil<br />';
			}
			if($sparkqty > 0){
				echo $sparkqty . 'spark plugs<br />';
			}
		}

		//定义轮胎折扣方案
		if($tireqty <10){
			$discount = 0;
			$tireqty = $tireqty * (1-$discount);
		} elseif( ($tireqty >= 10) && ($tireqty <=49) ) {
			$discount = 0.05;
			$tireqty = $tireqty * (1-$discount);
		} elseif( ($tireqty >=50) && ($tireqty <= 99) ){
			$discount = 0.10;
			$tireqty = $tireqty * (1-$discount);
		} elseif($tireqty >= 100){
			$discount = 0.15;
			$tireqty = $tireqty * (1-$discount);
		}

		//途径
		// switch($find){
		// 	case "a":
		// 		echo "<p>Regular Customer.</p>";
		// 		break;
		// 	case "b":
		// 		echo "<p>Customer referred by TV advert.</p>";
		// 		break;
		// 	case "c":
		// 		echo "<p>Customer referred by phone directory.</p>";
		// 		break;
		// 	case "d":
		// 		echo "<p>Customer referred by word of mouth.</p>";
		// 		break;
		// 	default:
		// 		echo "<p>We do not know how this customer found us.</p>";
		// 		break;
		// }

		echo "Items ordered: " . $totalqty . "<br />";

		//定义单价
		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);

		$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

		echo "Subtotal: $" . number_format($totalamount,2) . "<br />";
		$taxrate = 0.10;//税收
		$totalamount = $totalamount * (1 + $taxrate);//加税后的订单总额
		echo "Total including tax: $" . number_format($totalamount,2) . "<br />";
		echo "<p>Address to ship to is " . $address . "</p>";

		$outputting = $date . "\t" . $tireqty . " tires\t" . $oilqty . " oil\t" . $sparkqty . " spark plugs\t\$" . $totalamount . "\t" . $address . "\n";

		//文件操作
		$fp = fopen("$DOCUMENT_ROOT/./bob/orders.txt", 'ab');
		flock($fp, LOCK_EX);

		if(!$fp){
			echo "<p><strong>Your order could not be processed at this time.please try again later.</strong></p></body></html>";
			exit;
		}

		fwrite($fp, $outputting,strlen($outputting));
		flock($fp, LOCK_UN);
		fclose($fp);

		echo "<p>Order written.</p>";
	?>
</body>
</html>