<?php
session_start();
@$username=$_SESSION['username'];
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'consumer') {
        echo '<script>alert(\'请使用普通用户账号登录。\');
        if(history.length > 0) history.back(); else window.location="index.php";</Script>';
    }
}
else {
    echo '<script>alert(\'请先登录。\');
          window.location="index.php";</Script>';
}

@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    echo '<script>history.back();</script>';
}

$f_select="select * from follow WHERE (follower='$username')";
$f_result=$db->query($f_select);
$f_count=$f_result->num_rows;

$f_selectx="select * from follow WHERE (followed='$username')";
$f_resultx=$db->query($f_selectx);
$f_countx=$f_resultx->num_rows;

$a_select="select * from login WHERE (username='$username')";
$a_result=$db->query($a_select);
$a_row = $a_result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require('./reutilization/head.php');
    ?>
    <style type="text/css">
        <?php
        require ('./reutilization/style.php');
        require('./reutilization/up_1xx.php');
        ?>
        #body {
            width: 1100px;
            margin: 0px auto;
            padding: 0px;
        }
        #video {
            float: left;
            /*margin: 0px auto;*/
            /*padding: 0px;*/
        }
        #a:link {
            color: #878787;
        }
        #a:visited {
            color: #878787;
        }
        #a:hover {
            color: #29A4F8;
        }
        #button {
            padding: 2px;
            margin-bottom: 15px;
            margin-top: 15px;
            /*width: 44px;*/
            background-color: #D0D0D0;
            border: 1px solid #D0D0D0;
        }
        #others {
            height: 180px;
            width: 320px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
    </style>
    <script type="text/javascript">
        <?php
        require('./reutilization/up_2.php');
        ?>
        window.onscroll = function() {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t >0) {
                $("#top").css("background", "rgba(255,255,255,0.7)");
            }
            else {
                $("#top").css("background", "rgba(255,255,255,1)");
            }
        };
    </script>
</head>
<body class="body" style="background: #F6F4EC;">
<div id="top" style="background: white;">
    <a href="index.php">
        <img src="img/non.png" style="padding: 4px; margin-left: 20px;">
    </a>
    <table id="menu">
        <tr>
            <td>
                <a href="process/signout.php">
                    <span style="color: #459686;">退出</span>
                </a>
            </td>
        </tr>
    </table>
</div>

<div style="margin: 75px auto 0px; width: 1100px; box-shadow: 0px 0px 10px black;">
    <table style="width: 1100px; height: 170px;">
        <tr>
            <?php
            echo '
                    <td style="width: 1100px; overflow: hidden; margin: 0px; padding: 0px; background-size: cover;" background="account/'.$a_row['img'].'" valign="bottom"></td>
                ';
            ?>
        </tr>
    </table>
</div>
<div style="background: #F1F2F3; margin: -2px auto 0px; width: 1100px; height: 60px; padding-top: 14px;">
    <div style="float: left;  margin-top: -110px;">
        <table>
            <tr>
        <?php
        echo '
                <td style="width: 150px; height: 150px; overflow: hidden; padding: 0px; background-size: cover;" background="account/'.$a_row['logo'].'" valign="bottom"></td>
            ';
        ?>
            </tr>
        </table>
    </div>
    <div style="float: right">
        <?php
        if ($_SESSION['vip']==2) {
            echo '
                <a href="process/vip.php">
            ';
        }
        ?>
        <img src="img/pay.png" style="margin-top: -24px; margin-right: 2px;">
        <?php
        if ($_SESSION['vip']==2) {
            echo '</a>';
        }
        ?>
    </div>
    <div style="float: right; margin-right: 5px; font-size: 12px; color: #9C9C9C; padding-top: 14px;">
        <p>扫描二维码升级会员</p>
    </div>
    <?php
    echo '
            <div style="float: left; margin-top: -73px; margin-left: -10px;">
                <p style="color:#29A4F8; font-size: 64px; margin-bottom: -15px;">'.$username.'</p>
            </div>
            ';
    ?>
    <?php
    if ($_SESSION['vip']==1) {
        echo '
            <div style="float: left; margin-left: 5px; margin-top: 9px;">
                <img src="img/level.png">
            </div>
        ';
    }
    ?>

    <?php
        echo '
            <div style="float: left; margin-left: 15px; margin-top: 18px;">
                <span style="color: red; border: solid 1px red; border-radius: 3px; padding: 2px;">关注:&nbsp;'.$f_count.'&nbsp;&nbsp;|&nbsp;&nbsp;粉丝:&nbsp;'.$f_countx.'</span>
            </div>
        ';
    ?>
</div>
<div style="background: #F1F2F3; margin: 0px auto; width: 1100px;">
    <table style="margin: -2px 0px -2px -2px;">
        <tr>
            <td style="background: white; padding: 10px;">
                <a id="a" href="user.php">
                    <strong><span style="color: black;">观看记录</span></strong>
                </a>
            </td>
            <td style="padding: 10px;">
                <a id="a" href="subscribe.php">
                    <span>视频订阅</span>
                </a>
            </td>
            <td style="padding: 10px;">
                <a id="a" href="favorites.php">
                    <span>视频收藏</span>
                </a>
            </td>
            <td style="padding: 10px;">
                <a id="a" href="follow.php">
                    <span>朋友圈子</span>
                </a>
            </td>
            <td style="padding: 10px;">
                <a id="a" href="setting.php">
                    <span>账户设置</span>
                </a>
            </td>
        </tr>
    </table>
</div >

<div style="background:white; height:auto !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px;">
    <div style="width: 1000px; margin: 0 auto;">
        <?php

        $select="select * from history WHERE (username='$username')";
        $result=$db->query($select);
        $count=$result->num_rows;

        if (!$count > 0) {
            echo '
             <div style="position: absolute; top: 50%; left: 50%; width: 550px; height: 300px;">
                <img src="img/null.jpg" style="margin-left: -225px; margin-top: -2px;">
             </div>
             ';
        } else {
//            echo '
//            <div style="margin: 0px auto; width: 1000px; height: 40px; float: left;">
//                    <div style="padding-top: 15px; ">
//                        <div>
//                            <span style="margin: 0px 0px 0px 4px; font-size: 20px; color: #29A4F8;">观看历史</span>
//                        </div>
//                        <div style="width: 88px; height: 3px; background: #084077; float: left;">
//                            <br/>
//                        </div>
//                        <div style="padding: 0px; margin: 0px auto; width: 988px; height: 3px; background: #29A4F8;">
//                            <br/>
//                        </div>
//                    </div>
//            </div>
//        ';
//            echo '
//                <div style="float: left; border-right: solid 1px red; height: 100%;">
//
//                </div>
//            ';
            $selectx = "SELECT DISTINCT title FROM history WHERE (username='$username')";
            $resultx = $db->query($selectx);
            $countx = $resultx->num_rows;
            $title=[];
            //            echo $countx;
            $j = 0;
            for ($k = $countx; $k > 0; $k--) {
                $rowx = $resultx->fetch_assoc();
                $title[$k] = $rowx['title'];
            }
            for ($k=1; $k <= sizeof($title); $k++) {
//                echo $title.'\n';
                echo '
                    <div id="video" style="margin: 20px 7px 10px 2px; ">
                        <table id="td'.$k.'">
                            <tr>
                                <td id="others" background="temp/' . $title[$k] . '.png" valign="bottom">
                                    <div class="titlex">
                                        <a class="hrefx" href="play.php?id=' . $title[$k] . '" target=\'_blank\'>
                                            <span>&nbsp;&nbsp;&nbsp;' . $title[$k]. '</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                echo '
                           <script>
                                $(document).ready(function(){
                                    $("#td'.$k.'").hover(function(){
                                        $("#td'.$k.'").css("box-shadow","0px 0px 15px black");
                                    }, function() {
                                        $("#td'.$k.'").css("box-shadow","0px 0px 0px #888888");
                                    });
                                });
                            </script>
                            ';
                $j++;
                if($j>8)
                    break;
            }
        }

        ?>
    </div>
</div>
<?php
require('./reutilization/up_3.php');
//require('./reutilization/bottom.php');
?>
</body>
</html>