<?php
	//$price = array('Tires' => 100, 'Oil' => 10, 'Spark plugs' => 4 );
	// while($elment = each($price)){
	// 	echo $elment['key'];
	// 	echo '-';
	// 	echo $elment['value'];
	// 	echo '<br />';
	// } 
	//print_r(each($price));

	//var_dump(each($price));
	/*
		创建一个降序的数组
	*/
	// $num = array();
	// for($i = 10; $i>0; $i--){
	// 	array_push($num, $i);
	// }
	/*
		使用range创建的数组是一个升序的数组，使用array_reverse重新排序数组成为降序的数组
	*/
	// $num = range(1, 10);

	// $num = array_reverse($num);

	/*
		使用range的第三个参数，来控制创建的数组为降序的数组
	*/
	// $num = range(10, 1,-1);


	// print_r($num);

	/*
		使用extract函数将数组转换成标量变量
	*/
	//$arr = array("key1"=>"value1","key2"=>"value2","key3"=>"value3");
	//extract($arr);
	//echo "$key1 $key2 $key3";//输出结果为：value1 value2 value3
	//加前缀
	//extract($arr,EXTR_PREFIX_ALL,'my_prefix');
	//echo "$my_prefix_key1 $my_prefix_key2 $my_prefix_key3";//输出结果为：value1 value2 value3

	/*
		数组中的指针操作函数
	*/
	// $price = array('Tires' => 100, 'Oil' => 10, 'Spark plugs' => 4 );
	// echo current($price);//100
	// echo '<br />';
	// echo next($price);//10
	// echo '<br />';
	// echo end($price);//4
	// echo '<br />';
	// echo prev($price);//10
	// echo '<br />';
	// echo reset($price);//100
	// echo '<br />';
	// echo pos($price);//100 是current的别名

	/*
		数组元素个数统计函数
	*/
	// $arr = array(1,2,3,4,5,6,2,3,4,5,4,6);
	// echo count($arr);//12
	// echo '<br />';
	// echo sizeof($arr);//12 是count的别名
	// echo '<br />';
	// print_r(array_count_values($arr)) ;//统计数组中相同元素出现的次数

	/*
		对数组中的每一个元素应用任何函数array_walk()
	*/
	//$arr = array(1,2,3,4);

	// function my_print($value)
	// {
	// 	echo "$value<br />";
	// }
	// array_walk($arr, 'my_print');

	// function my_multiply($value,$key,$factor)
	// {
	// 	$value *= $factor;
	// 	echo $value;
	// }
	// array_walk($arr, 'my_multiply',3);




	/*
		字符串
	*/
	//trim、ltrim、rtrim
	// $str = "  space  ";
	// echo $str.'<br />';
	// echo trim($str).'<br />';
	// print($str).'<br />';

	// printf("%s",$str);

	// echo '<br />';

	// echo sprintf("%s",$str);

	// echo '<br />';

	//addcslashes 以C语言的风格使用反斜线转移字符串中的字符。该函数中有两个参数，第一个参数为字符串，第二个参数为需要转义的字符。返回的是个字符串。

	/*
		注意：当选择对字符 0，a，b，f，n，r，t 和 v 进行转义时需要小心，它们将被转换成 \0，\a，\b，\f，\n，\r，\t 和 \v。在 PHP 中，只有 \0（NULL），\r（回车符），\n（换行符）和 \t（制表符）是预定义的转义序列， 而在 C 语言中，上述的所有转换后的字符都是预定义的转义序列。
	*/

	// $str = 'Welcome to Shanghai';
	// echo $str.'<br/>';
	// echo addcslashes($str, 'm').'<br/>';//向字符串中的特定字符添加反斜杠
	// echo addcslashes($str,'S').'<br/>';//对大小写敏感

	// echo addcslashes($str, 'a..z').'<br/>';//向字符串中特定范围内的字符添加反斜杠
	// echo addcslashes($str, 'A..Z').'<br/>';
	// echo addcslashes($str, 'a..g').'<br/>';

	/*
		addslashes 使用反斜线引用字符串
	*/
	// $str = "my name's lilei";
	// echo $str.'<br/>';
	// echo addslashes($str);//对数组中的某些字符添加反斜线，这些字符是：单引号（'）、双引号(")、反斜线(\)、NULL(NULL字符) 

	/*
		bin2hex 把一个字符串值从二进制转化为十六进制
	*/
	// $str = 'Hello World';
	// echo $str.'<br/>';
	// $str = bin2hex($str);//从二进制转化为十六进制
	// echo $str.'<br/>';
	// $str = hex2bin($str);//从十六进制转化为二进制
	// echo $str;

	/*
		chop 去除字符串右边的空格 rtrim的别名
	*/
	// $str = "hello ";
	// echo $str;
	// echo 'a';
	// echo '<br/>';
	// $str = chop($str);
	// echo $str;
	// echo 'a';


	/*
		chr 返回ASCII所指定的单个字符
	*/
	// $str = chr(100);
	// echo $str;

	/*
		chunk_split 将字符串分隔成小块
	*/

	// $str = 'fdesasffdasasasdadsafgrgbgkhpkyokasdvnsorisak[pasdasdm';
	// $str = chunk_split($str,5,'-');
	// echo $str;


	/*
		在字符串中查找字符串strstr、strchr、strrchr、stristr
	*/

	// $str = 'hei sda keuo dasof vkgsd';

	// echo strstr($str, 'sof');//返回sof vkgsd(区分大小写)
	// echo '<br/>';
	// echo strchr($str,'v');//返回vkgsd(和strstr一样)
	// echo '<br/>';
	// echo strrchr($str, 'd');//返回d（最后出现关键字的位置）
	// echo '<br/>';
	// echo stristr($str, 'ei');//返回ei sda keuo dasof vkgsd(不区分大小写)


	/*
		查找子字符串的位置strpos、strrpos
	*/

	// $str = 'hello world';
	// echo strpos($str, 'l');//第一次出现的位置
	// echo '<br/>';
	// echo strrpos($str, 'l');//最后出现的位置
	// echo '<br/>';
	// echo strpos($str, 'l',7);//从第7个位置开始出现的位置
	//echo '<br/>';

	//如果目标关键字不在字符串中，strpos和strrpos就会返回false，PHP是弱类型语言，返回的就是0，也就是字符串的第一个字符
	//为了避免这个问题，可以使用“===”运算符来检测返回值
	// $result = strpos($str, 's');
	// if($result === false){
	// 	echo 'Not Found';
	// }else{
	// 	echo 'Found at position:'.$result;
	// }


	/*
		替换子字符串str_replace、substr_replace
	*/

//	$str = "hello world";
//	echo str_replace('world', 'kitty', $str);//将字符串中的world换成kitty   输出：hello kitty
//	echo '<br/>';
//	echo substr_replace($str, 'cat', 6,2);//从字符串的第6个位置开始，后面的两个字符换成cat   输出：hello catrld

	/*
	 * 递归函数
	 * */
	function reverse_r($str){
		if(strlen($str)>0){
			reverse_r(substr($str,1));
			//echo $str.'<br/>';
		}
		echo substr($str,0,1);
		return;
	}
	reverse_r('hello');
?>
