<?php
//array_chunk()函数将数组分成多块数组
$arr = array(1,2,3,4,5,6,7,8,9);
echo '<pre>';
print_r(array_chunk($arr,2));
echo '<br/>';
print_r(array_chunk($arr,2,true));//保留原来的键名