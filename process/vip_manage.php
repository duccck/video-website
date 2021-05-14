<?php
session_start();

@$username=$_POST['delete'];
//echo $_POST['delete'];
if(!$username) {
    echo '<script type="text/javascript">alert(\'请至少选择一项。\');</script>';
    echo '<script>history.go(-1);</script>';
}

@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    echo '<script>history.go(-1);</script>';
}
for($i=0; $i<count($username); $i++) {
//    $delete = "delete from login WHERE username='$username[$i]'";
//    $result = $db->query($delete);
    $update="update login set vip='2' WHERE username='$username[$i]'";
    $result=$db->query($update);
}
echo '<script>alert(\'删除成功。\');</script>';
echo '<script>history.go(-1);</script>';
?>