<?php
session_start();

$username=$_SESSION['username'];
$oldpassowrd=($_POST['oldpassword']);
$newpassowrd=($_POST['newpassword']);
$email=($_POST['email']);

//echo $username;
//echo $oldpassowrd;
//echo $newpassowrd;
if(!$oldpassowrd) {
    echo '<script type="text/javascript">alert(\'请输入当前账户密码。\');</script>';
    echo '<script>history.go(-1);</script>';
}
elseif (!$newpassowrd && !$email) {
    echo '<script type="text/javascript">alert(\'请输入需要修改的项目。\');</script>';
    echo '<script>history.go(-1);</script>';
}
elseif ($newpassowrd && $oldpassowrd==$newpassowrd) {
    echo '<script type="text/javascript">alert(\'新密码不能与原密码相同。\');</script>';
    echo '<script>history.go(-1);</script>';
}
elseif ($newpassowrd && $email && $oldpassowrd!=$newpassowrd) {
    $reg_password=preg_match('/^[a-zA-Z0-9]{8,16}$/', $newpassowrd);
    if (!$reg_password) {
        echo '<script type="text/javascript">alert(\'密码必须是 8-16 位的数字或英文字母的组合。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
    else {
            @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
            $db->query("SET NAMES utf8");
            if (mysqli_connect_errno()) {
                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                echo '<script>history.go(-1);</script>';
            }
            $select = "select * from login WHERE (username='$username') AND (password='$oldpassowrd')";
            $result_1 = $db->query($select);
            $count = $result_1->num_rows;
    //    echo $count;

            if ($count > 0) {
                $selectx = "select * from login WHERE (username='$username') AND (password='$oldpassowrd') AND (email='$email')";
                $result_1x = $db->query($selectx);
                $countx = $result_1x->num_rows;
                if($countx>0) {
                    echo '<script>alert(\'新邮箱地址不能与原邮箱地址相同。\')</script>';
                    echo '<script>history.go(-1);</script>';
                } else {
                    $update = "update login set password='$newpassowrd', email='$email' WHERE username='$username'";
                    $result_2 = $db->query($update);
                    if ($result_2) {
                        unset($_SESSION['role']);
                        unset($_SESSION['username']);
                        unset($_SESSION['vip']);
                        unset($_SESSION['title']);
                        echo '<script>alert(\'修改成功。\\n请重新登录。\');</script>';
                        echo '<script>window.location="../index.php";</script>';
                    } else {
                        echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    }
                }
            } else {
                echo '<script>alert(\'原密码错误。\')</script>';
                echo '<script>history.go(-1);</script>';
            }
        }
}
elseif ($newpassowrd && $oldpassowrd!=$newpassowrd) {
    $reg_password=preg_match('/^[a-zA-Z0-9]{8,16}$/', $newpassowrd);
    if (!$reg_password) {
        echo '<script type="text/javascript">alert(\'密码必须是 8-16 位的数字或英文字母的组合。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
    else {
            @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
            $db->query("SET NAMES utf8");
            if (mysqli_connect_errno()) {
                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                echo '<script>history.go(-1);</script>';
            }
            $select = "select * from login WHERE (username='$username') AND (password='$oldpassowrd')";
            $result_1 = $db->query($select);
            $count = $result_1->num_rows;
    //    echo $count;

            if ($count > 0) {
                    $update = "update login set password='$newpassowrd' WHERE username='$username'";
                    $result_2 = $db->query($update);
                    if ($result_2) {
                        unset($_SESSION['role']);
                        unset($_SESSION['username']);
                        unset($_SESSION['vip']);
                        unset($_SESSION['title']);
                        echo '<script>alert(\'修改成功。\\n请重新登录。\');</script>';
                        echo '<script>window.location="../index.php";</script>';
                    } else {
                        echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    }
            } else {
                echo '<script>alert(\'原密码错误。\')</script>';
                echo '<script>history.go(-1);</script>';
            }
        }
}
elseif ($email) {
    $reg_email=preg_match('/^(\w+\.)*\w+@\w+(\.\w+)+$/', $email);
    if (!$reg_email) {
        echo '<script type="text/javascript">alert(\'邮箱格式为：example@example.example。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
    else {
        @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
        $db->query("SET NAMES utf8");
        if (mysqli_connect_errno()) {
            echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        $select = "select * from login WHERE (username='$username') AND (password='$oldpassowrd')";
        $result_1 = $db->query($select);
        $count = $result_1->num_rows;
        //    echo $count;

        if ($count > 0) {
            $selectx = "select * from login WHERE (username='$username') AND (password='$oldpassowrd') AND (email='$email')";
            $result_1x = $db->query($selectx);
            $countx = $result_1x->num_rows;
            if($countx>0) {
                echo '<script>alert(\'新邮箱地址不能与原邮箱地址相同。\')</script>';
                echo '<script>history.go(-1);</script>';
            } else {
                $update = "update login set email='$email' WHERE username='$username'";
                $result_2 = $db->query($update);
                if ($result_2) {
                    echo '<script>alert(\'修改成功。\');</script>';
                    echo '<script>history.go(-1);</script>';
                } else {
                    echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            }
        } else {
            echo '<script>alert(\'原密码错误。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
    }
}
?>
