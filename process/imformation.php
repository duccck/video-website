<?php
session_start();

$username=$_SESSION['username'];
$weibo=($_POST['weibo']);
$weixin=($_POST['weixin']);
$qq=($_POST['qq']);

if (!$weibo && !$weixin && !$qq) {
    echo '<script type="text/javascript">alert(\'请输入需要关联的账号。\');</script>';
    echo '<script>history.go(-1);</script>';
} else {
    @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
    $db->query("SET NAMES utf8");
    if (mysqli_connect_errno()) {
        echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
        echo '<script>history.go(-1);</script>';
    }

    if ($weibo) {
        $update = "update login set weibo='$weibo' WHERE username='$username'";
        $result = $db->query($update);
        if ($result) {
            echo '<script>alert(\'添加成功。\');</script>';
            echo '<script>history.go(-1);</script>';
        } else {
            echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
    }
    if ($weixin) {
        $update = "update login set weixin='$weixin' WHERE username='$username'";
        $result = $db->query($update);
        if ($result) {
            echo '<script>alert(\'添加成功。\');</script>';
            echo '<script>history.go(-1);</script>';
        } else {
            echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
    }
    if ($qq) {
        $update = "update login set qq='$qq' WHERE username='$username'";
        $result = $db->query($update);
        if ($result) {
            echo '<script>alert(\'添加成功。\');</script>';
            echo '<script>history.go(-1);</script>';
        } else {
            echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
    }
}
?>