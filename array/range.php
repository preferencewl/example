<?php
//使用range()函数创建数组
$arr  = range(0,5);//升序的数组
$arr2 = range(5,1,-1);//通过第三个参数控制升序还是降序
echo '<pre>';
print_r($arr);
echo '<br/>';
print_r($arr2);