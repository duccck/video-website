<?php
$username=$_POST['username'];
$passowrd=$_POST['password'];
$passowrdx=$_POST['passwordx'];
$email=$_POST['email'];
$role='consumer';

if(!$username || !$passowrd || !$email || !$passowrdx) {
    echo '<script type="text/javascript">alert(\'请完整填写注册信息。\');</script>';
    echo '<script>history.go(-1);</script>';
//    echo $_POST['password'];
//    echo $_POST['username'];

}
elseif ($passowrd!=$passowrdx) {
    echo '<script type="text/javascript">alert(\'两次密码不一致。\');</script>';
    echo '<script>history.go(-1);</script>';
}
else {
    $reg_username= preg_match('/^[a-zA-Z]{1,16}$/', $username);
    $reg_password=preg_match('/^[a-zA-Z0-9]{8,16}$/', $passowrd);
    $reg_email=preg_match('/^(\w+\.)*\w+@\w+(\.\w+)+$/', $email);
//    echo $reg_username.$reg_password.$reg_date;
    if (!$reg_username || !$reg_password || !$reg_email) {
        echo '<script type="text/javascript">alert(\'昵称必须是 1-16 位的英文字母组合；\\n密码必须是 8-16 位的数字或英文字母的组合；\\n邮箱格式为：example@example.example。\');</script>';
        echo '<script>history.go(-1);</script>';
    }
    else {

//        echo $date;
        @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
        $db->query("SET NAMES utf8");
        if (mysqli_connect_errno()) {
            echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
            echo '<script>history.go(-1);</script>';
        }

        $signin = "select * from login WHERE (username='$username')";
        $result = $db->query($signin);
        $count = $result->num_rows;
        if ($count > 0) {
            echo '<script>alert(\'昵称已存在。\')</script>';
            echo '<script>history.go(-1);</script>';
        } else {
            $add = "insert into login (username, password, role, tag, vip, email, juge, logo, img, weibo, weixin, qq) VALUES ('$username', '$passowrd', '$role', 'null', '2', '$email', 'null', 'user.jpg', 'user.png', 'null', 'null', 'null')";
            $result = $db->query($add);
            if ($result) {
                echo '<script>alert(\'注册成功。\')</script>';
                echo '<script>history.go(-1);</script>';
            } else {
                echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                echo '<script>history.go(-1);</script>';
            }
        }
    }
}
?>
