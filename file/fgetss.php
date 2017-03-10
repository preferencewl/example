<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 13:34
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];//当前运行脚本所在的文档根目录，可以在服务器配置文件中定义
//使用fgetss()函数获取文件中的内容。从文件指针中获取文件中的一行内容并过滤掉HTML标记
$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');
if(!$fp){
    echo "打开文件失败!";
    exit;
}
while(!feof($fp)){
    $file_contents = fgetss($fp);
    echo $file_contents . '<br/>';
}
fclose($fp);