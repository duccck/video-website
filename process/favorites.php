<?php
session_start();
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'consumer') {
        echo '<script>alert(\'请使用普通用户账号登录。\');
        history.go(-1);</Script>';
    }
    else {
        $title=$_GET['id'];
        $username=$_SESSION['username'];

        @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
        $db->query("SET NAMES utf8");
        if(mysqli_connect_errno()) {
            echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        $select_1="select * from favorites WHERE (title='$title') AND (username='$username')";
        $result_1=$db->query($select_1);
        $count=$result_1->num_rows;
        if($count>0) {
            echo '<script>alert(\'你已经收藏过了。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
        else {
            $select_2="select tag from video WHERE (title='$title')";
            $select_3="select tagx from video WHERE (title='$title')";
            $result_2=$db->query($select_2);
            $result_3=$db->query($select_3);
            $row_2=$result_2->fetch_assoc();
            $row_3=$result_3->fetch_assoc();
            $tag=$row_2['tag'];
            $tagx=$row_3['tagx'];

//    echo $tag.$tagx;
            $add = "insert into favorites (title, username, tag, tagx) VALUES ('$title', '$username', '$tag', '$tagx')";
            $result_4=$db->query($add);


            if ($result_4) {
                echo '<script>alert(\'收藏成功。\')</script>';
                echo '<script>history.go(-1);</script>';
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
