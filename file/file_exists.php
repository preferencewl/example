<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 14:33
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$file = "$DOCUMENT_ROOT./file/file.txt";
//检查文件或目录是否存在
if(file_exists($file)){
    echo 'exists';
}else{
    echo 'no_exists';
}