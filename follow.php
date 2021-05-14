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

$f_select="select * from follow WHERE (follower='$username') ORDER BY id DESC";
$f_result=$db->query($f_select);
$f_count=$f_result->num_rows;

$f_selectx="select * from follow WHERE (followed='$username') ORDER BY id DESC";
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
        <?php
//        require('./reutilization/up_2.php');
        ?>
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
            height: 100px;
            width: 178px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #selectx {
            height: 25px;
            width: 60px;
        }
        #deletex {
            height: 25px;
            width: 60px;
            display: none;
        }
        #qx {
            height: 25px;
            width: 60px;
            display: none;
        }
        input {
            font-weight: 400;
            font-size: 14px;
            color: #9d9e9e;
            text-shadow: 1px 1px 0 rgba(256,256,256,1.0);

            background: #fff;
            border: 1px solid #fff;
            border-radius: 5px;

            box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        }
        input:hover {
            background: #dfe9ec;
            color: #29A4F8;
        }
        input:focus {
            background: #dfe9ec;
            color: #29A4F8;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }
    </style>
    <script type="text/javascript">
        <?php
        require('./reutilization/up_2.php');
        ?>
        $(document).ready(function(){
            $("#selectx").click(function(){
                $("#deletex").toggle("normal");
                $("#qx").toggle();
            });
        });
        $(document).ready(function(){
            $("#fadex").click(function(){
                $("#menux").toggle("normal");
            });
        });
        $(document).ready(function(){
            $("#fadexx").click(function(){
                $("#follow").show();
                $("#fadexx").css("color", "#65C7E3");
                $("#followed").hide();
                $("#fadexxx").css("color", "#878787");
                $("#selectx").show();
            });
        });
        $(document).ready(function(){
            $("#fadexxx").click(function(){
                $("#follow").hide();
                $("#fadexx").css("color", "#878787");
                $("#followed").show();
                $("#fadexxx").css("color", "#65C7E3");
                $("#selectx").hide();
            });
        });
        window.onscroll = function() {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t >0) {
                $("#top").css("background", "rgba(255,255,255,0.7");
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
<form action="process/follow_remove.php" method="post">
    <div style="background: #F1F2F3; margin: 0px auto; width: 1100px;">
        <table style="margin: -2px 0px -2px -2px;">
            <tr>
                <td style="padding: 10px;">
                    <a id="a" href="user.php">
                        <span>观看记录</span>
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
                <td style="background: white; padding: 10px;">
                        <strong><span style="color: black;"><a id="a" href="follow.php" style="color: black;">朋友</a><span id="fadex" style="cursor: pointer;">圈子</span></span></strong>
                </td>
                <td style="padding: 10px;">
                    <a id="a" href="setting.php">
                        <span>账户设置</span>
                    </a>
                </td>
            </tr>
        </table>
        <div style="float: right; margin-top: -35px; margin-right: 56px;">
            <input id="qx" type="button" value="全选" />
            <input id="deletex" type="submit" value="删除" />
            <?php

            if ($f_count>0) {
                echo '
                    <input id="selectx" type="button" value="选择" />
                    ';
            }
            ?>
        </div>
    </div >

    <div id="menux" style="background: white; margin: 0px auto; width: 1100px; border-bottom: solid 1px #F1F2F3; display: none;">
        <table style="font-size: 14px; margin: 0px auto;">
            <tr>
                <td style="padding: 5px; cursor: pointer; color: #65C7E3;">
                    <span id="fadexx">我的关注</span>
                </td>
                <td style="padding: 2px; color: white;">
                    隐身
                </td>
                <td style="padding: 2px;cursor: pointer; color: #878787;">
                    <span id="fadexxx">我的粉丝</span>
                </td>
            </tr>
        </table>
    </div>

    <div id="follow" style="background:white; height:auto !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px;">
        <div style="width: 800px; margin: 0 auto;">
            <?php
//            $i;
            if ($f_count > 0) {
                for ($i=$f_count; $i > 0; $i--) {
                    $f_row = $f_result->fetch_assoc();
                    $username = $f_row['followed'];

                    $select = "select * from login WHERE username='$username'";
                    $result = $db->query($select);
                    $count = $result->num_rows;
//                    echo $count;
                    for ($j = $count; $j > 0; $j--) {
                        $row = $result->fetch_assoc();
                        $logo = $row['logo'];
                        $img = $row['img'];
//                        echo $logo;

                        echo '
                    <div id="video' . $i . '" style="margin: 20px 8px 10px 9px;">
                        <label for="checkbox' . $i . '">
                            <table id="td' . $i . '">
                                <tr>
                                    <td id="others" background="account/'.$img.'" valign="bottom">
                                        <div class="title_f">
                                            <a class="href_f" href="friend.php?friend=' . $username . '" target=\'_blank\'>
                                                <span style="margin-left: 70px;">'.$username.'</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table style="float: left; margin-top: -94px;">
                                <tr>
                                    <td style="width: 80px; height: 80px; background-size:cover;" background="account/'.$logo.'" valign="top"></td>
                                </tr>
                            </table>
                        </label>
                        <div>
                            <input id="checkbox' . $i . '" type="checkbox" name="delete[]" value="' . $username . '"/>
                        </div>
                    </div>
                ';
                        echo '

                            <script>
                                $(document).ready(function(){
                                    $("#selectx").click(function(){
                                        $("#checkbox' . $i . '").toggle();
                                    });
                                });
                                $(document).ready(function(){
                                    $("#qx").click(function () {
                                        if ($("#checkbox' . $i . '").attr("checked") != "checked") {
                                            $("#checkbox' . $i . '").attr("checked", "checked");
                                        } else {
                                            $("#checkbox' . $i . '").removeAttr("checked");
                                        }
                                    });
                                });
                                $("#video' . $i . '").hover(function(){
                                    $("#video' . $i . '").css("box-shadow","0px 0px 10px #888888");
                                }, function() {
                                    $("#video' . $i . '").css("box-shadow","0px 0px 0px #888888");
                                });
                            </script>
                            ';
                        echo '
                            <style type="text/css">
                                #checkbox' . $i . ' {
                                    height: 20px;
                                    width: 20px;
                                    display: none;
                                }
                            </style>
                            ';
                        echo '
                <style type="text/css">
                    #video' . $i . ' {
                        float: left;
                        /*margin: 0px auto;*/
                        /*padding: 0px;*/
                    }
                </style>
                ';
                    }
                }
            } else {
                echo '
             <div style="position: absolute; top: 50%; left: 50%; width: 550px; height: 300px;">
                <img src="img/null.jpg" style="margin-left: -225px; margin-top: -2px;">
             </div>
             ';
            }
            ?>
        </div>
    </div>
</form>


<div id="followed" style="background:white; height:auto !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px; display: none;">
    <div style="width: 800px; margin: 0 auto;">
        <?php
        //            $i;
        if ($f_countx > 0) {
            for ($i=$f_countx+1000; $i > 1000; $i--) {
                $f_rowx = $f_resultx->fetch_assoc();
                $username = $f_rowx['follower'];

                $select = "select * from login WHERE username='$username'";
                $result = $db->query($select);
                $count = $result->num_rows;
//                    echo $count;
                for ($j = $count; $j > 0; $j--) {
                    $row = $result->fetch_assoc();
                    $logo = $row['logo'];
                    $img = $row['img'];
//                        echo $logo;

                    echo '
                    <div id="video' . $i . '" style="margin: 20px 8px 10px 9px;">
                            <table id="td' . $i . '">
                                <tr>
                                    <td id="others" background="account/'.$img.'" valign="bottom">
                                        <div class="title_f">
                                            <a class="href_f" href="friend.php?friend=' . $username . '" target=\'_blank\'>
                                                <span style="margin-left: 70px;">'.$username.'</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table style="float: left; margin-top: -94px;">
                                <tr>
                                    <td style="width: 80px; height: 80px; background-size:cover;" background="account/'.$logo.'" valign="top"></td>
                                </tr>
                            </table>
                    </div>
                ';
                    echo '

                            <script>
                                $("#video' . $i . '").hover(function(){
                                    $("#video' . $i . '").css("box-shadow","0px 0px 10px #888888");
                                }, function() {
                                    $("#video' . $i . '").css("box-shadow","0px 0px 0px #888888");
                                });
                            </script>
                            ';
                    echo '
                <style type="text/css">
                    #video' . $i . ' {
                        float: left;
                        /*margin: 0px auto;*/
                        /*padding: 0px;*/
                    }
                </style>
                ';
                }
            }
        } else {
            echo '
             <div style="position: absolute; top: 50%; left: 50%; width: 550px; height: 300px;">
                <img src="img/null.jpg" style="margin-left: -225px; margin-top: -2px;">
             </div>
             ';
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
