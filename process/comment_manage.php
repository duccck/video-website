<?php
session_start();

@$content=$_POST['delete'];

if(!$content) {
    echo '<script type="text/javascript">alert(\'请至少选择一项。\');</script>';
    echo '<script>history.go(-1);</script>';
}

@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    echo '<script>history.go(-1);</script>';
}
for($i=0; $i<count($content); $i++) {
    $delete = "delete from comment WHERE content='$content[$i]'";
    $result = $db->query($delete);
    $deletex = "delete from `like` WHERE content='$content[$i]'";
    $resultx = $db->query($deletex);
}
echo '<script>alert(\'删除成功。\');</script>';
echo '<script>history.go(-1);</script>';
?>