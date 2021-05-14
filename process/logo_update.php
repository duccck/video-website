<?php
session_start();
$username=$_SESSION['username'];


if(!$_FILES['logo']['name'] && !$_FILES['img']['name']) {
    echo '<script type="text/javascript">alert(\'请选择需要上传的图片。\');</script>';
    echo '<script>history.go(-1);</script>';
//    echo $title.$tag.$imformation;
}
else {
    if ($_FILES['logo']['name']) {
        if ($_FILES['logo']['name']==$_SESSION['username'].'.jpg') {
            if ($_FILES['logo']['size'] <= 10485760) {
                $db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
                $db->query("SET NAMES utf8");
                if (mysqli_connect_errno()) {
                    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                    echo '<script>history.go(-1);</script>';
                }

                $logo=$_FILES['logo']['name'];
                $path = '/Applications/XAMPP/xamppfiles/htdocs/account/'.$_FILES['logo']['name'];

    //            echo $logo;
    //            echo $path;


                $update = "update login set logo='$logo' WHERE username='$username'";
                $result = $db->query($update);
                if ($result) {
                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $path)) {
                        echo '<script>alert(\'上传成功。\')</script>';
                        echo '<script>window.location.href="../setting.php";</script>';
                    } else {
                        echo '<script>alert(\'上传失败。\\n请重试。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    }
                } else {
                    echo '<script>alert(\'上传失败。\\n请重试。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }



            } else {
                echo '<script>alert(\'图片大小不能超过 10MB。\')</script>';
                echo '<script>history.go(-1);</script>';
            }
        } else {
            echo '<script type="text/javascript">alert(\'图片文件名必须和账户名一致。\\n图片格式必须是 JPG 格式。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
    }


if ($_FILES['img']['name']) {
    if ($_FILES['img']['name']==$_SESSION['username'].'.png') {
        if ($_FILES['img']['size'] <= 10485760) {
            $db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
            $db->query("SET NAMES utf8");
            if (mysqli_connect_errno()) {
                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                echo '<script>history.go(-1);</script>';
            }

            $img=$_FILES['img']['name'];
            $path = '/Applications/XAMPP/xamppfiles/htdocs/account/'.$_FILES['img']['name'];

            $update = "update login set img='$img' WHERE username='$username'";
            $result = $db->query($update);
            if ($result) {
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $path)) {
                    echo '<script>alert(\'上传成功。\')</script>';
                    echo '<script>window.location.href="../setting.php";</script>';
                } else {
                    echo '<script>alert(\'上传失败。\\n请重试。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            } else {
                echo '<script>alert(\'上传失败。\\n请重试。\')</script>';
                echo '<script>history.go(-1);</script>';
            }



        } else {
            echo '<script>alert(\'图片大小不能超过 10MB。\')</script>';
            echo '<script>history.go(-1);</script>';
        }
    } else {
        echo '<script type="text/javascript">alert(\'图片文件名必须和账户名一致。\\n图片格式必须是 PNG 格式。\');</script>';
        echo '<script>history.go(-1);</script>';
//        echo $_FILES['img']['name'].' '.$_SESSION['username'].'.png';
    }
}


}
?>

