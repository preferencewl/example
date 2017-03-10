<?php
//数组中的指针操作
$arr = array(10,20,30,40,50,60);
echo current($arr);//10
echo '<br/>';
echo next($arr);//20
echo '<br/>';
echo end($arr);//60
echo '<br/>';
echo prev($arr);//50
echo '<br/>';
echo reset($arr);//10
echo '<br/>';
echo pos($arr);//10 current()函数的别名
echo '<br/>';