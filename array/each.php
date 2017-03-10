<?php
$arr = array('Tires' => 100, 'Oil' => 10, 'Spark plugs' => 4);
echo '<pre>';

/*
 * print_r(each($arr));
 Array
    (
        [1] => 100
        [value] => 100
        [0] => Tires
        [key] => Tires
    )
*/
echo '</pre>';
while($element = each($arr)){ //返回数组中的键/值对并将数组指针向前移动一步
    echo $element['key'];
    echo '-';
    echo $element['value'];
    echo '<br/>';
}