<?php
session_start();

$username=$_POST['username'];
$passowrd=$_POST['password'];
//$role=($_POST['role']);
if(!$username || !$passowrd) {
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

    $signin="select * from login WHERE (username='$username') AND (password='$passowrd')";
    $result=$db->query($signin);
    $count=$result->num_rows;
    //echo $count;

    if($count > 0)
    {
        $row=$result->fetch_assoc();
        if ($row['juge']=='bad') {
            echo '<script type="text/javascript">alert(\'此账号已被禁止登录。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        else {
            $_SESSION['role']=$row['role'];
            $_SESSION['username']=$row['username'];
            $_SESSION['vip']=$row['vip'];
        //    echo $_SESSION['id'];
            if($row['role']=='admini') {
                echo '<script>window.location="../manager.php";</script>';
            }
            else {
                echo '<script>history.go(-1);</script>';
            }
        }
    }

    //$row=$result->fetch_assoc();
    ////echo '$row';
    //if($username==$row['username'] && $passowrd==$row['password'] && $role==$row['role'])
    //{
    //    if($role=='consumer') {
    //        echo '<script>window.location="index.php";</script>';
    //    }
    //    else {
    //        echo '<script>window.location="manager.php";</script>';
    //    }
    //}
    else {
        echo '<script type="text/javascript">alert(\'用户名或密码错误。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
}
?>
