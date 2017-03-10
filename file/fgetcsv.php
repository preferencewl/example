<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 13:48
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
//fgetcsv()函数 ,从文件指针中读取一行并解析CSV字段（CSV，Comma-Separated Values 逗号分隔值）
$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');

if(!$fp){
    echo "打开文件失败!";
    exit;
}
while(!feof($fp)){
    $file_contents = fgetcsv($fp);
    print_r($file_contents) . '<br/>';
}
fclose($fp);