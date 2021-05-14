<?php
session_start();

$username=$_GET['friend'];
$usernamex=$_SESSION['username'];


@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    echo '<script>history.go(-1);</script>';
}
$delete="delete from follow WHERE (follower='$usernamex') AND (followed='$username')";
$result=$db->query($delete);

//echo '<script>alert(\'Success !\');</script>';
//echo '<script>history.go(-1);</script>';
echo '<script>window.location.href="../friend.php?friend='.$username.'";</script>';
?>