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
            height: 180px;
            width: 320px;
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
                $("#qx").toggle("normal");
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
<form action="process/favorites_delete.php" method="post">
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
                <td style="background: white; padding: 10px;">
                    <a id="a" href="favorites.php">
                        <strong><span style="color: black;">视频收藏</span></strong>
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
        <div style="float: right; margin-top: -35px; margin-right: 56px;">
            <input id="qx" type="button" value="全选" />
            <input id="deletex" type="submit" value="删除" />
            <?php

            $select="select tagx from favorites WHERE (username='$username') ORDER BY id DESC";
            $result=$db->query($select);
            $count=$result->num_rows;
            if ($count>0) {
                echo '
                    <input id="selectx" type="button" value="选择" />
                    ';
            }
            ?>
        </div>
    </div >

    <div style="background:white; height:auto !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px;">
        <div style="width: 1000px; margin: 0 auto;">
            <?php

            $tagx;
            //    $t=[];
            //    $v=[];
            $i;
            $tagxx=[];
            if ($count > 0) {
                $select_11="select DISTINCT tagx from favorites WHERE (username='$username')";
                $result_11=$db->query($select_11);
                $count_11=$result_11->num_rows;
                for ($z=0; $z < $count_11; $z++) {
                    $row_11 = $result_11->fetch_assoc();
                    $tagxx[$z]=$row_11['tagx'];
                }
//                echo $tagxx[1];


                for ($i=count($tagxx)-1; $i>=0; $i--) {
//                    $row = $result->fetch_assoc();
                    $tagx = $tagxx[$i];
//            $t[]=$i;
                    echo '
                <div style="margin: 0px auto; width: 1000px; height: 38px; padding: 0px; float: left;">
                    <div style="padding-top: 15px; ">
                        <div>
                            <span style="margin: 0px 0px 0px 4px; font-size: 20px; color: #29A4F8;">'.$tagx.'</span>
                            <div id="fadeinx'.$i.'" style="float: right; margin-right: 10px;">
                                <img id="fadein'.$i.'" src="img/fade_1.png">
                            </div>
                            <div id="fadeoutx'.$i.'" style="float: right; margin-right: 10px; display: none;">
                                <img id="fadeout'.$i.'" src="img/fade_2.png">
                            </div>
                        </div>
                        <div style="width: 48px; height: 3px; background: #084077; float: left;">
                            <br/>
                        </div>
                        <div style="padding: 0px; margin: 0px auto; width: 988px; height: 3px; background: #29A4F8">
                            <br/>
                        </div>
                    </div>
                </div>
            ';
                    $selectx = "SELECT title FROM favorites WHERE (tagx='$tagx') AND (username='$username') ORDER BY id DESC";
                    $resultx = $db->query($selectx);
                    $countx = $resultx->num_rows;
                    $title;
//            echo $countx;
                    $j=0;
                    for ($k=$countx; $k>0; $k--) {
                        $rowx = $resultx->fetch_assoc();
                        $title=$rowx['title'];
//                echo $title.'\n';
                        echo '
                    <div id="video'.$i.$k.'" style="margin: 22px 7px 10px 2px;">
                        <label for="checkbox'.$i.$k.'">
                            <table id="td'.$i.$k.'">
                                <tr>
                                    <td id="others" background="temp/' . $title . '.png" valign="bottom">
                                        <div class="titlex">
                                            <a class="hrefx" href="play.php?id=' . $title . '" target=\'_blank\'>
                                                <span>&nbsp;&nbsp;&nbsp;' . $title . '</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </label>
                        <div>
                            <input id="checkbox'.$i.$k.'" type="checkbox" name="delete[]" value="'.$title.'"/>
                        </div>
                    </div>
                ';
                        echo '

                            <script>
                                $(document).ready(function(){
                                    $("#selectx").click(function(){
                                        $("#checkbox'.$i.$k.'").toggle();
                                    });
                                });
                                $(document).ready(function(){
                                    $("#td'.$i.$k.'").hover(function(){
                                        $("#td'.$i.$k.'").css("box-shadow","0px 0px 15px black");
                                    }, function() {
                                        $("#td'.$i.$k.'").css("box-shadow","0px 0px 0px #888888");
                                    });
                                });
                                $(document).ready(function(){
                                    $("#qx").click(function () {
                                        if ($("#checkbox'.$i.$k.'").attr("checked") != "checked") {
                                            $("#checkbox'.$i.$k.'").attr("checked", "checked");
                                        } else {
                                            $("#checkbox'.$i.$k.'").removeAttr("checked");
                                        }
                                    });
                                });
                            </script>
                            ';
                        echo '
                            <style type="text/css">
                                #checkbox'.$i.$k.' {
                                    height: 20px;
                                    width: 20px;
                                    display: none;
                                }
                            </style>
                            ';
                        echo '
                <style type="text/css">
                    #video'.$i.$k.' {
                        float: left;
                        /*margin: 0px auto;*/
                        /*padding: 0px;*/
                    }
                </style>
                ';
                        echo '
                <script>
                    $(document).ready(function(){
                        $("#fadein'.$i.'").click(function(){
                            $("#video'.$i.$k.'").hide();
                            $("#fadeinx'.$i.'").hide();
                            $("#fadeoutx'.$i.'").show();
                            
                        });
                    });
                    $(document).ready(function(){
                        $("#fadeout'.$i.'").click(function(){
                            $("#video'.$i.$k.'").show();
                            $("#fadeinx'.$i.'").show();
                            $("#fadeoutx'.$i.'").hide();
                            
                        });
                    });
                </script>
                ';
//                        $j++;
//                        if($j>5)
//                            break;
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

<?php
require('./reutilization/up_3.php');
//require('./reutilization/bottom.php');
?>
</body>
</html>
