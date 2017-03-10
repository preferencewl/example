<?php
//数组的组合  将一个数组的值作为键，另一个数组的值作为值
//两个数组的元素个数必须是一样，否则会抛出异常

$arr1 = array('a','b','c','d','e','f');
$arr2 = array(1,2,3,4,5,6);
$arr = array_combine($arr1,$arr2);
echo '<pre>';
print_r($arr);