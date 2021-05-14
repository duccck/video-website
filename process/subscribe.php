<?php
session_start();
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'consumer') {
        echo '<script>alert(\'请使用普通用户账号登录。\');
        history.go(-1);</Script>';
    }
    else {
        $tag=$_GET['id'];
        $username=$_SESSION['username'];

        @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
        $db->query("SET NAMES utf8");
        if(mysqli_connect_errno()) {
            echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        $select_1="select * from subscribe WHERE (tag='$tag') AND (username='$username')";
        $result_1=$db->query($select_1);
        $count=$result_1->num_rows;
        if($count>0) {
            echo '<script>alert(\'你已经订阅过了。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
        else {
//            $select_2="select tag from video WHERE (title='$title')";
//            $result_2=$db->query($select_2);
//            $row=$result_2->fetch_assoc();
//            $tag=$row['tag'];
//    echo $tag;
            $select_2="select tagx from video WHERE (tag='$tag')";
            $result_2=$db->query($select_2);
            $row = $result_2->fetch_assoc();
            $tagx = $row['tagx'];
            $add = "insert into subscribe (username, tag, tagx) VALUES ('$username', '$tag', '$tagx')";
            $result_3=$db->query($add);


            if ($result_3) {
                echo '<script>alert(\'订阅成功。\')</script>';
                echo '<script>history.go(-1);</script>';
            } else {
                echo '<script>alert(\'发生错误！\\n请重试。\')</script>';
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
