<?php
//数组元素个数的统计
$arr = array(1,2,3,4,5,3,5,6,6,7,5,6,8,8,7,8);
echo count($arr);
echo '<br/>';
echo sizeof($arr);//count()函数的别名
echo '<br/>';
echo '<pre>';
print_r(array_count_values($arr));//数组中相同元素的个数(数组中的元素作为键，数组中的元素出现的次数作为值)