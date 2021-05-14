<?php
$title=$_POST['title'];
if(!$title || !$_FILES['file']['name']) {
    echo '<script type="text/javascript">alert(\'没有填写标题或选择文件。\');</script>';
    echo '<script>history.go(-1);</script>';
//    echo $title.$tag.$imformation;
}
else {
    $alias = $title . '.png';
    if ($alias == $_FILES['file']['name']) {
        $db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
        $db->query("SET NAMES utf8");
        if (mysqli_connect_errno()) {
            echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        $select = "select tag from video WHERE (title='$title')";
        $result_1=$db->query($select);
        $count=$result_1->num_rows;
        if($count > 0) {
            $row = $result_1->fetch_assoc();
            $tag = $row['tag'];
            if ($_FILES['file']['type'] == "image/png") {
                if ($_FILES['file']['size'] <= 10485760) {
                    $path = '/Applications/XAMPP/xamppfiles/htdocs/temp/' . $_FILES['file']['name'];
                    if (file_exists($path)) {
                        echo '<script>alert(\'此文件已存在。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    } else {
//                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
//                            $db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
//                            $db->query("SET NAMES utf8");
//                            if (mysqli_connect_errno()) {
//                                echo '<script type="text/javascript">alert(\'Could not connect to database!\');</script>';
//                                echo '<script>window.location="../manager.php";</script>';
//                            }
//                            $title_1=mysqli_escape_string($db, $title);
//                            $path_1=mysqli_escape_string($db, $path);
//                            $imformation_1=mysqli_escape_string($db, $imformation);
                            $select_x = "select tagx from video WHERE (title='$title')";
                            $result_x=$db->query($select_x);
                            $row_x = $result_x->fetch_assoc();
                            $tag_x=$row_x['tagx'];

                            $add = "insert into cover (title, path, tag, tagx) VALUES ('$title', '$path', '$tag', '$tag_x')";
                            $result_2 = $db->query($add);
                            if ($result_2) {
                                if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
                                    echo '<script>alert(\'上传成功。\')</script>';
                                    echo '<script>history.go(-1);</script>';
                                } else {
                                    echo '<script>alert(\'上传失败。\\n请重试。\')</script>';
                                    echo '<script>history.go(-1);</script>';
                                }
                            } else {
                                echo '<script>alert(\'上传失败。\\n请重试。\')</script>';
                                echo '<script>history.go(-1);</script>';
                            }

//                            echo '<script>window.location="../cover.php";</script>';
//                        }
                    }
                }else {
                    echo '<script>alert(\'图片大小不能超过 10MB。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            } else {
                echo '<script>alert(\'文件格式错误。\\n必须是 PNG 格式。\')</script>';
                echo '<script>history.go(-1);</script>';
            }

        } else {
            echo '<script>alert("没有这个视频。")</script>';
            echo '<script>history.go(-1);</script>';
        }
    } else {
        echo '<script>alert("标题必须同文件名一致。")</script>';
        echo '<script>history.go(-1);</script>';
    }
}
?>

