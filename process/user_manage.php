<?php
session_start();

@$username=$_POST['delete'];

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
    $select="select logo, img from login WHERE username='$username[$i]'";
    $result=$db->query($select);
    $row=$result->fetch_assoc();
    $logo='/Applications/XAMPP/xamppfiles/htdocs/account/'.$row['logo'];
    $img='/Applications/XAMPP/xamppfiles/htdocs/account/'.$row['img'];

    unlink($logo);
    unlink($img);

    $delete = "update login set juge='bad' WHERE username='$username[$i]'";
    $result = $db->query($delete);
    $deletex = "delete from comment WHERE username='$username[$i]'";
    $resultx = $db->query($deletex);
    $deletexx = "delete from favorites WHERE username='$username[$i]'";
    $resultxx = $db->query($deletexx);
    $deletexxx = "delete from history WHERE username='$username[$i]'";
    $resultxxx = $db->query($deletexxx);
    $deletexxxx = "delete from subscribe WHERE username='$username[$i]'";
    $resultxxxx = $db->query($deletexxxx);
    $deletexxxxx = "delete from `like` WHERE usernamex='$username[$i]'";
    $resultxxxxx = $db->query($deletexxxxx);
    $deletexxxxxx = "delete from `like` WHERE username='$username[$i]'";
    $resultxxxxxx = $db->query($deletexxxxxx);
    $deletexxxxxxx = "delete from follow WHERE follower='$username[$i]'";
    $resultxxxxxxx = $db->query($deletexxxxxx);
    $deletexxxxxxxx = "delete from follow WHERE followed='$username[$i]'";
    $resultxxxxxxxx = $db->query($deletexxxxxx);
}
echo '<script>alert(\'删除成功。\');</script>';
echo '<script>history.go(-1);</script>';
?>