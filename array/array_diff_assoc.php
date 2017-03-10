<?php
//array_diff_assoc()函数 返回在第一个数组中出现的元素，不在其它数组中出现的元素  不仅对比值，还要对比数组的键
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

$arr = array_diff_assoc($array1,$array2);
echo '<pre>';
print_r($arr);