<?php
session_start();

$username=$_POST['username'];
$email=$_POST['email'];
//$role=($_POST['role']);
if(!$username || !$email) {
    echo '<script type="text/javascript">alert(\'请完整填写信息。\');</script>';
    echo '<script>history.go(-1);</script>';
}
else {
    @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
    $db->query("SET NAMES utf8");
    if(mysqli_connect_errno()) {
        echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
        echo '<script>history.go(-1);</script>';
    }

    $signin="select password from login WHERE (username='$username') AND (email='$email')";
    $result=$db->query($signin);
    $count=$result->num_rows;
//    echo $count;

    if($count > 0)
    {
//        echo $count;
//        $row=$result->fetch_assoc();
        echo '<script>alert("此账户密码已经发送至关联邮箱。");</script>';
        echo '<script>history.go(-1);</script>';
//
    } else {
        echo '<script type="text/javascript">alert(\'用户名或关联邮箱错误。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
}
?>
