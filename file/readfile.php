<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 10:10
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];//当前运行脚本所在的文档根目录，在服务器配置文件中定义
//使用readfile()函数读取文件内容并写入到输出缓冲
$file_contents = readfile("$DOCUMENT_ROOT./file/file.txt");//使用readfile()函数，需要给一个要读取的文件名
echo $file_contents;//返回从文件中读入的字节数  返回值是int型