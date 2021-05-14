<?php
session_start();
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'consumer') {
        echo '<script>alert(\'请使用普通用户账号登录。\');
        history.go(-1);</Script>';
    }
    else {
        $comment=$_POST['comment'];
        $title=$_SESSION['title'];
        $username=$_SESSION['username'];
        if(!$comment) {
            echo '<script type="text/javascript">alert(\'请输入评论。\');</script>';
            echo '<script>history.go(-1);</script>';
//    echo $_POST['password'];
//    echo $_POST['username'];

        }
        else {
            @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
            $db->query("SET NAMES utf8");
            if(mysqli_connect_errno()) {
                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                echo '<script>history.go(-1);</script>';
            }
            $select="select * from comment WHERE (title='$title') AND (username='$username') AND (content='$comment')";
            $resultx = $db->query($select);
            $count = $resultx->num_rows;
            if ($count>0) {
                echo '<script>alert(\'你已经发表过相同的评论了。\')</script>';
                echo '<script>history.go(-1);</script>';
            } else {
                $add = "insert into comment (title, content, username, count) VALUES ('$title', '$comment', '$username', '0')";
                $result = $db->query($add);

                if ($result) {
    //        echo '<script>alert(\'Success !\')</script>';
                    echo '<script>history.go(-1);</script>';
                } else {
                    echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            }
        }
    }
}
else {
    echo '<script>alert(\'请先登录。\');
          history.go(-1);</Script>';
}
?>
