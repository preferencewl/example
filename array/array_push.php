<?php
//创建一个降序的数组
$arr = array();
for($i=10; $i>0; $i--){
    array_push($arr,$i); //将一个或多个单元压入到数组末尾（入栈）
}
echo '<pre>';
print_r($arr);
echo '</pre>';