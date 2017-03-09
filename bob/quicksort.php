<?php
	/*
		快速排序
	*/

	function quicksort($arr){
		//首先确定结束条件
		$arr_coun = count($arr);
		if($arr_coun <= 1){
			return $arr;
		}

		//选择第一个元素作为基准元素
		$base_value = $arr[0];

		//初始化小于基准元素的左数组
		$left_array = array();

		//初始化大于基准元素的右数组
		$right_array = array();

		//去除数组中第一个元素
		array_shift($arr);
		//遍历除基准元外的数组中的其他元素，并按大小放入左右数组
		foreach ($arr as $value) {
			if($value < $base_value){
				$left_array[] = $value;
			}else{
				$right_array[] = $value;
			}
		}

		//再分别对左右数组进行相同的排序
		$left_array = quicksort($left_array);
		$right_array = quicksort($right_array);

		//合并基准元素和左右数组

		return array_merge($left_array,array($base_value),$right_array);//
	}


	$arr = array(3,6,8,3,1,2,90,54,67,88,43,21,6,8,0,55,76);

	print_r($arr);
	$arr = quicksort($arr);
	print_r($arr);

	



?>