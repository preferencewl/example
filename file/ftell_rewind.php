<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 14:38
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

//打开文件
$fp = fopen("$DOCUMENT_ROOT./file/file.txt",'rb');
if(!$fp){
    echo '文件打开失败!';
    exit;
}
echo '文件指针最后指向的位置',(ftell($fp));
echo '<br/>';
rewind($fp);//文件指针恢复到最开始
echo '使用rewind()函数后，指针指向' , (ftell($fp));