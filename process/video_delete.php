<?php
@$title=$_POST['delete'];
if(!$title) {
    echo '<script type="text/javascript">alert(\'请至少选择一项。\');</script>';
    echo '<script>history.go(-1);</script>';
}
else {
    @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
    $db->query("SET NAMES utf8");
    if(mysqli_connect_errno()) {
        echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
//    $path=array();
    for($i=0; $i<count($title); $i++) {
        $path="select path from video WHERE title='$title[$i]'";
        $result=$db->query($path);
        $row=$result->fetch_assoc();
        $pathx="select path from cover WHERE title='$title[$i]'";
        $resultx=$db->query($pathx);
        $rowx=$resultx->fetch_assoc();
    //    echo $row['path'];
        unlink($row['path']);
        unlink($rowx['path']);
        $delete_1="delete from video WHERE title='$title[$i]'";
        $result_1=$db->query($delete_1);
        $delete_2="delete from comment WHERE title='$title[$i]'";
        $result_2=$db->query($delete_2);
        $delete_3="delete from favorites WHERE title='$title[$i]'";
        $result_3=$db->query($delete_3);
        $delete_4="delete from cover WHERE title='$title[$i]'";
        $result_4=$db->query($delete_4);
        $delete_5="delete from history WHERE title='$title[$i]'";
        $result_5=$db->query($delete_5);
        $delete_6="delete from `like` WHERE title='$title[$i]'";
        $result_6=$db->query($delete_6);

    //    $row=$result->fetch_assoc();
    }
    echo '<script>alert(\'删除成功。\');</script>';
    echo '<script>history.go(-1);</script>';
}
?>