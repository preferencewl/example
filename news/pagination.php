<?php
/*//导入数据库配置文件
include_once ('dbconfig.php');
//连接数据库
$con = mysqli_connect(HOST,USER,PWD,DBNAME);
if(!$con){
    echo '连接数据库失败'.mysqli_error($con);
    exit;
}
mysqli_query($con,"set names utf8");

$pageSize = 5;//每页显示数据条数
$sql = "SELECT * FROM news";
$res = mysqli_query($con,$sql);
$totalNum = mysqli_num_rows($res);
$totalPageCount = ceil($totalNum/$pageSize);//总页数
//判断当前是哪一页
$nowPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
//上一页
$prePage = ($nowPage-1<=0) ? 1 : $nowPage-1;
//下一页
$nextPage = ($nowPage+1>=$totalPageCount) ? $totalPageCount : $nowPage+1;
//偏移量
$offset = ($nowPage-1)*$pageSize;

//从数据库中取数据
$sql1 = "SELECT * FROM news LIMIT $offset,$pageSize";
$result = mysqli_query($con,$sql1);
while($row = mysqli_fetch_assoc($result)){
    echo $row['title'].$row['content'].'<br/>';
}
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=1\">首页</a>";
if($nowPage != 1){
    echo "<a href='".$_SERVER['PHP_SELF']."?page=".$prePage."'>上一页</a>";
}
if($nowPage != $totalPageCount){
    echo "<a href='".$_SERVER['PHP_SELF']."?page=".$nextPage."'>下一页</a>";
}

echo "<a href='".$_SERVER['PHP_SELF']."?page=".$totalPageCount."'>尾页</a>";*/

function pagination($page,$total,$phpfile,$pagesize=5,$pagelen=5)
{
    $pagecode = '';//定义变量，存放分页生成的HTML
    $page = intval($page);//避免非数字页码
    $total = intval($total);//保证总记录数值类型正确
    if(!$total){
        return array();//总记录数为0返回空数组
    }
    $pages = ceil($total/$pagesize);//计算总分页

    //处理页码合理性
    if($page<1){
        $page = 1;
    }
    if($page > $pages){
        $page = $pages;
    }

    //计算查询偏移量
    $offset = ($page-1)*$pagesize;

    //页码范围计算
    $init = 1;//起始页码数
    $max = $pages;//结束页码数
    $pagelen = ($pagelen % 2) ? $pagelen : $pagelen+1;//页码个数
    $pageoffset = ($pagelen -1) / 2;//页码个数左右偏移量

    //生成html
    $pagecode = '<div class="page">';
    $pagecode.="<span>第{$page}页/共{$pages}页</span>"; //第几页,共几页
    //如果是第一页，则不显示第一页和上一页的连接
    if ($page != 1) {
        $pagecode.='<a href="' . $phpfile . '?page=1/">首页</a>'; //第一页
        $pagecode.='<a href="' . $phpfile . '?page=' . ($page - 1) . '>上一页</a>'; //上一页
    }
    //分页数大于页码个数时可以偏移
    if ($pages > $pagelen) {
    //如果当前页小于等于左偏移
       if ($page <= $pageoffset) {
           $init = 1;
           $max = $pagelen;
        } else {//如果当前页大于左偏移
        //如果当前页码右偏移超出最大分页数
             if ($page + $pageoffset >= $pages + 1) {
                 $init = $pages - $pagelen + 1;
             } else {
                //左右偏移都存在时的计算
                $init = $page - $pageoffset;
                 $max = $page + $pageoffset;
             }
         }
     }
    //生成html
     for ($i = $init; $i <= $max; $i++) {
             if ($i == $page) {
                     $pagecode.='<span> ' . $i . ' </span>';
         } else {
                     $pagecode.='<a href="' . $phpfile . '?page=' . $i . '/">' . $i . '</a>';
         }
     }
     if ($page != $pages) {
             $pagecode.='<a href="' . $phpfile . '?page=' . ($page + 1) . '">下一页</a> '; //下一页
         $pagecode.='<a href="' . $phpfile . '?page=' . $pages . '">尾页</a>'; //最后一页
     }
     echo '<form name="selform">';
     $pagecode.='<select name="page" onchange="document.selform.submit()">';
     for ($i = 1; $i <= $pages; $i++) {
            if ($i == $page) {
                     $pagecode .= "<option selected>" . $i . "</option>";
         } else {
                     $pagecode .= "<option>" . $i . "</option>";
         }
     }
     $pagecode.="</select></form>";
     /* End*************我添加的部分**** */
     $pagecode.='</div>';
     return array('pagecode' => $pagecode, 'sqllimit' => ' limit ' . $offset . ',' . $pagesize);
}


























