<?php
session_start();

$username=$_GET['username'];
$title=$_GET['title'];
$content=$_GET['content'];


@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    echo '<script>history.go(-1);</script>';
}
$delete="delete from comment WHERE (content='$content') AND (title='$title') AND (username='$username')";
$result=$db->query($delete);

$deletex="delete from `like` WHERE (content='$content') AND (title='$title') AND (username='$username')";
$resultx=$db->query($deletex);
//echo '<script>alert(\'Success !\');</script>';
echo '<script>history.go(-1);</script>';
?>