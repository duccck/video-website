<?php
session_start();
@$username=$_SESSION['username'];
@$follow=$_POST['delete'];

if(!$follow) {
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
    for($i=0; $i<count($follow); $i++) {
        $delete="delete from follow WHERE follower='$username' AND followed='$follow[$i]'";
        $result=$db->query($delete);
        if($result) {
//            echo '<script>alert(\'删除成功。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        else {
            echo '<script>alert(\'发生错误。\\n请重试。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
    }
}
?>