<?php
session_start();

@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');
                  </script>';
}
$usernamex=$_SESSION['username'];
$username=$_GET['username'];
$title=$_GET['title'];
$content=$_GET['content'];
//echo $content.$username.$title.$usernamex;
$select="select * from `like` WHERE (title='$title') AND (username='$username') AND (content='$content') AND (usernamex='$usernamex')";
$result=$db->query($select);
//if ($result) echo '1'; else echo '0';
$count = $result->num_rows;
//echo $count;
if ($count>0) {
    echo '<script>alert(\'你已经对这条评论点过赞了。\')</script>';
    echo '<script>history.go(-1);</script>';
} else {
    $add = "insert into `like` (username, usernamex, title, content) VALUES ('$username', '$usernamex', '$title', '$content')";
    $resultx = $db->query($add);

    $selectx = "select count from comment WHERE (title='$title') AND (username='$username') AND (content='$content')";
    $resultxx = $db->query($selectx);
    $row = $resultxx->fetch_assoc();
    $count = $row['count'] + 1;
    $update = "update comment set count='$count' WHERE (title='$title') AND (username='$username') AND (content='$content')";
    $result = $db->query($update);
    echo '<script>history.go(-1);</script>';
}
?>