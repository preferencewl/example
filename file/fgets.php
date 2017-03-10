<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 13:16
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
//使用fgets()函数获取文件中的内容。fgets()从文件指针中读取一行

//打开文件
$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');
if(!$fp){
    echo "打开文件失败!";
}
while(!feof($fp)){
    $file_contents = fgets($fp,999);//两个参数，第一个参数必须是有效的文件指针，第二个参数指定读取的长度(可省略，默认为1K字节，既1024字节)
    echo $file_contents . '<br/>';
}
fclose($fp);
