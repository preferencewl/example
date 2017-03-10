<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 14:14
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');

if(!$fp){
    echo "文件打开失败!";
    exit;
}
$file_contents = fread($fp,filesize("$DOCUMENT_ROOT./file/file.txt"));//fread()函数从文件中读取任意长度的字符串，filesize()函数取得文件大小
echo nl2br($file_contents);
fclose($fp);