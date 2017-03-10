<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/3/10
 * Time: 9:10
 */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']; //当前运行脚本所在文档根目录，在服务器配置文件中定义
//echo $DOCUMENT_ROOT; //输出内容为D:/xampp/htdocs/example/
date_default_timezone_set('PRC');//设置时区为中国
$date = date('Y-m-d H:i:s');//获取并格式化当前时间
//echo $date;

$output = '当前时间为:' . $date . "\n";

//文件写操作
$fp = fopen("$DOCUMENT_ROOT/./file/file.txt",'ab');//获取一个文件资源，并且可以用二进制的形式在文件末尾处追加内容
flock($fp,LOCK_EX); //独占锁

if(!$fp){
    echo '失败!';
    exit;
}
fwrite($fp,$output,strlen($output));//向文件中写入内容
flock($fp,LOCK_UN);//释放锁
fclose($fp);
echo '成功!';
