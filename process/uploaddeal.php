<?php
//if($_FILES['file']['error']) {
//    echo $_FILES['file']['error'];
//}
//else {
$title=$_POST['title'];
$tag=$_POST['tag'];
$vip=$_POST['vip'];
$tagx='类别';
$imformation=$_POST['imformation'];
if(!$title || !$tag || !$vip || !$imformation || !$_FILES['file']['name']) {
    echo '<script type="text/javascript">alert(\'请完整填写信息。\');</script>';
    echo '<script>history.go(-1);</script>';
//    echo $title.$tag.$imformation.$vip.$_FILES['file']['name'];
}
else {
    $alias = $title . '.mp4';
    if ($alias == $_FILES['file']['name']) {
        if ($tag == 'movie' || $tag == 'mv' || $tag == 'tv' || $tag == 'cartoon' || $tag == 'science' || $tag == 'game') {
            if ($tag == 'movie') {
                $tagx='电影';
            }
            if ($tag == 'mv') {
                $tagx='音乐';
            }
            if ($tag == 'tv') {
                $tagx='剧集';
            }
            if ($tag == 'cartoon') {
                $tagx='动画';
            }
            if ($tag == 'science') {
                $tagx='科技';
            }
            if ($tag == 'game') {
                $tagx='游戏';
            }
            if ($vip == '2' || $vip == '1') {
                if ($_FILES['file']['type'] == "video/mp4") {
                    if ($_FILES['file']['size'] <= 2147483648) {
                        $path = '/Applications/XAMPP/xamppfiles/htdocs/temp/' . $_FILES['file']['name'];
                        if (file_exists($path)) {
                            echo '<script>alert(\'视频已存在。\')</script>';
                            echo '<script>history.go(-1);</script>';
                        } else {
                            $db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
                            $db->query("SET NAMES utf8");
                            if (mysqli_connect_errno()) {
                                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                                echo '<script>history.go(-1);</script>';
                            }
                            $add = "insert into video (title, path, tag, tagx, imformation, vip, watch) VALUES ('$title', '$path', '$tag', '$tagx', '$imformation', '$vip', '0')";
                            $result = $db->query($add);
                            if ($result) {
                                if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
                                    echo '<script>alert(\'上传成功。\')</script>';
                                    echo '<script>history.go(-1);</script>';
                                }
                                else {
                                    echo '<script>alert(\'发生错误。\\n请重试。\')</script>';
                                    echo '<script>history.go(-1);</script>';
                                }
                            } else {
                                echo '<script>alert(\'上传失败。\')</script>';
                                echo '<script>history.go(-1);</script>';
                            }
//                            if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
//                                $db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
//                                $db->query("SET NAMES utf8");
//                                if (mysqli_connect_errno()) {
//                                    echo '<script type="text/javascript">alert(\'连接数据库失败！\');</script>';
//                                    echo '<script>window.location="../manager.php";</script>';
//                                }
////                            $title_1=mysqli_escape_string($db, $title);
////                            $path_1=mysqli_escape_string($db, $path);
////                            $imformation_1=mysqli_escape_string($db, $imformation);
//                                $add = "insert into video (title, path, tag, imformation, vip, watch) VALUES ('$title', '$path', '$tag', '$imformation', '$vip', 'null')";
//                                $result = $db->query($add);
//                                if ($result) {
//                                    echo '<script>alert(\'上传成功！\')</script>';
//                                    echo '<script>window.location="../cover.php";</script>';
//                                } else {
//                                    echo '<script>alert(\'发生错误！\\n请重试。\')</script>';
//                                    echo '<script>window.location="../manager.php";</script>';
//                                }
//                            } else {
//                                echo '<script>alert(\'上传失败！\')</script>';
//                                echo '<script>window.location="../manager.php";</script>';
//                            }
                        }
                    } else {
                        echo '<script>alert(\'文件大小不能超过 2GB 。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    }
                } else {
                    echo '<script>alert(\'文件格式错误！\\n必须是 MP4 格式。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            }
            else {
                echo '<script>alert("权限设置错误。")</script>';
                echo '<script>history.go(-1);</script>';
            }

        }
        else {
            echo '<script>alert("标签设置错误。")</script>';
            echo '<script>history.go(-1);</script>';
        }
    }
    else {
        echo '<script>alert("标题必须和文件名一致。")</script>';
        echo '<script>history.go(-1);</script>';
    }
}
?>

