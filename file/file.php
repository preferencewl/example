<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 10:55
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];//当前运行脚本所在文档的根目录，可以在服务器配置文件中定义

//使用file()函数读取文件内容，返回的是一个数组，文件中的每一行就是数组中的一个元素
$file_contents = file("$DOCUMENT_ROOT./file/file.txt");//将文件读入数组
print_r($file_contents);
