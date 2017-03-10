<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 10:37
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

//使用fpassthru()函数读取文件中的内容。使用fpassthru()函数，必须先使用fopen()打开文件
$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');
$file_contents = fpassthru($fp);//输出文件指针处的所有剩余数据
echo $file_contents;//将给定的文件指针从当前的位置读取到EOF并把结果写到输出缓冲区
//如果已经向文件写入数据，就必须调用 rewind() 来将文件指针指向文件头。

//如果既不修改文件也不在特定位置检索，只想将文件的内容下载到输出缓冲区，应该使用 readfile()，这样可以省去 fopen() 调用。
fclose($fp);