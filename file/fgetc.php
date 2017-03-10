<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 13:57
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');

if(!$fp){
    echo '文件打开失败!';
    exit;
}
while(!feof($fp)){
    $file_contents = fgetc($fp);//从文件指针处读取一个字符
    if (!feof($fp)){
        echo ($file_contents == "\n" ? "<br />" : $file_contents);
    }

}
fclose($fp);