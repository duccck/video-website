<?php
session_start();

$title=$_POST['title'];
$tag=($_POST['tag']);
$vip=($_POST['vip']);
$imformation=($_POST['imformation']);

if(!$title) {
    echo '<script type="text/javascript">alert("请输入需要更改信息的视频标题。");</script>';
    echo '<script>history.go(-1);</script>';
} else {
    if (!$imformation && !$tag && !$vip) {
        echo '<script type="text/javascript">alert("请输入要修改的信息。");</script>';
        echo '<script>history.go(-1);</script>';
//        echo $vip;
    } else {
        @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
        $db->query("SET NAMES utf8");
        if (mysqli_connect_errno()) {
            echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
            echo '<script>history.go(-1);</script>';
        }
        $select = "select title from video WHERE title='$title'";
        $result = $db->query($select);
        $count = $result->num_rows;
        if ($count > 0) {
            if ($tag) {
                if ($tag == 'movie' || $tag == 'mv' || $tag == 'tv' || $tag == 'cartoon' || $tag == 'science' || $tag == 'sports' || $tag == 'game') {
                    $update_1 = "update video set tag='$tag' WHERE title='$title'";
                    $result_1 = $db->query($update_1);
                    if ($result_1) {
                        echo '<script>alert(\'更新信息成功。\');</script>';
                        echo '<script>history.go(-1);</script>';
                    } else {
                        echo '<script>alert(\'更新信息失败。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    }
                } else {
                    echo '<script>alert(\'标签设置错误。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            }
            if ($vip) {
                if ($vip == '2' || $vip == '1') {
                    $update_2 = "update video set vip='$vip' WHERE title='$title'";
                    $result_2 = $db->query($update_2);
                    if ($result_2) {
                        echo '<script>alert(\'更新信息成功。\');</script>';
                        echo '<script>history.go(-1);</script>';
                    } else {
                        echo '<script>alert(\'更新信息失败。\')</script>';
                        echo '<script>history.go(-1);</script>';
                    }
                } else {
                    echo '<script>alert(\'权限设置错误。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            }
            if ($imformation) {
                $update_3 = "update video set imformation='$imformation' WHERE title='$title'";
                $result_3 = $db->query($update_3);
                if ($result_3) {
                    echo '<script>alert(\'更新信息成功。\');</script>';
                    echo '<script>history.go(-1);</script>';
                } else {
                    echo '<script>alert(\'更新信息失败。\')</script>';
                    echo '<script>history.go(-1);</script>';
                }
            } else {
                echo '<script>alert(\'标签设置错误。\')</script>';
                echo '<script>history.go(-1);</script>';
            }
        } else {
            echo '<script>alert(\'没有这个视频。\')</script>';
            echo '<script>history.go(-1);</script>';
        }

    }
}
?>