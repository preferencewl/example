<?php
$arr = array("key1"=>"value1","key2"=>"value2","key3"=>"value3");
extract($arr);//将数组中的键转换成标准变量
echo $key1,$key2,$key3;
echo '<br/>';
//加前缀
extract($arr,EXTR_PREFIX_ALL,'my_prefix');
echo $my_prefix_key1,$my_prefix_key2,$my_prefix_key3;