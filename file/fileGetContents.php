<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 11:02
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];//当前运行脚本所在文档的根目录，可以再服务器配置文件中定义
//使用file_get_contents()函数获取文件内容，返回的是一个字符串
$file_contents = file_get_contents("$DOCUMENT_ROOT./file/file.txt");
echo $file_contents;