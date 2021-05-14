<?php
session_start();
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'consumer') {
        echo '<script>alert(\'请使用普通用户账号登录。\');
        history.go(-1);</Script>';
    }
    else {
        $username=$_GET['friend'];
        $usernamex=$_SESSION['username'];

            @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
            $db->query("SET NAMES utf8");
            if(mysqli_connect_errno()) {
                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                echo '<script>history.go(-1);</script>';
            }
            $select="select username from login WHERE username='$username'";
            $result = $db->query($select);
            $count = $result->num_rows;
            if (!$count>0) {
                echo '<script>alert(\'你关注的账户不存在。\')</script>';
                echo '<script>history.go(-1);</script>';
            } else {
                $add = "insert into follow (follower, followed) VALUES ('$usernamex', '$username')";
                $result = $db->query($add);

                if ($result) {
                    //        echo '<script>alert(\'Success !\')</script>';
                    echo '<script>window.location.href="../friend.php?friend='.$username.'";</script>';
//                    echo '<script>history.go(-1);</script>';
                } else {
                    echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            }
    }
}
else {
    echo '<script>alert(\'请先登录。\');
          history.go(-1);</Script>';
}
?>
