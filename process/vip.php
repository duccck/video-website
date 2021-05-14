<?php
session_start();

$username=$_SESSION['username'];

@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    echo '<script>history.go(-1);</script>';
}

$update="update login set vip='1' WHERE username='$username'";
$result=$db->query($update);
if($result) {
    $_SESSION['vip']=1;
    echo '<script>alert(\'升级成功。\');</script>';
    echo '<script>history.go(-1);</script>';
} else {
    echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
    echo '<script>history.go(-1);</script>';
}
?>
