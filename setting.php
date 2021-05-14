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
//    echo '<script>history.back();</script>';
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
//        require('./reutilization/up_1.php');
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
        .login-formx {
            width: 300px;
            margin: 0 auto;
            position: relative;
            z-index:5;

            /*background: #f3f3f3;*/
            /*border: 1px solid #fff;*/
            border-radius: 5px;

            /*box-shadow: 0 1px 3px rgba(0,0,0,0.5);*/
            /*-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);*/
            /*-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);*/
        }
        .login-formx .content .input {
            width: 200px;
            padding: 15px 25px;

            /*font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;*/
            font-weight: 400;
            font-size: 14px;
            color: #9d9e9e;
            text-shadow: 1px 1px 0 rgba(256,256,256,1.0);

            background: #fff;
            /*border: 1px solid #fff;*/
            border-radius: 5px;

            box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        }
        .login-formx .content .input:hover {
            background: #dfe9ec;
            color: #414848;
        }
        .login-formx .content .input:focus {
            background: #dfe9ec;
            color: #414848;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }
        .input, .user-icon, .pass-icon, .button, .register {
            transition: all 0.5s;
            -moz-transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            -ms-transition: all 0.5s;
        }
        .login-formx .footer {
            text-align: center;
            padding: 20px 30px 15px 30px;
            overflow: auto;

            background: #d4dedf;
            /*border-top: 1px solid #fff;*/

            /*box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);*/
            /*-moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);*/
            /*-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);*/
        }
        .login-formx .footer .button {
            /*float:right;*/
            padding: 5px 15px;

            /*font-family: 'Bree Serif', serif;*/
            font-weight: 300;
            font-size: 18px;
            color: #fff;
            text-shadow: 0px 1px 0 rgba(0,0,0,0.25);

            background: #56c2e1;
            border: 1px solid #46b3d3;
            border-radius: 5px;
            cursor: pointer;

            box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
            -moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
            -webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
        }

        .login-formx .footer .button:hover {
            background: #3f9db8;
            /*border: 1px solid rgba(256,256,256,0.75);*/

            box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
            -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
            -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
        }

        .login-formx .footer .button:focus {
            position: relative;
            bottom: -1px;

            background: #56c2e1;

            box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
            -moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
            -webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
        }
    </style>
    <script type="text/javascript">
        <?php
        require('./reutilization/up_2.php');
        ?>
        $(document).ready(function(){
            $("#fadex").click(function(){
                $("#menux").toggle("normal");
            });
        });
        $(document).ready(function(){
            $("#fadexx").click(function(){
                $("#safe").show();
                $("#fadexx").css("color", "#65C7E3");
                $("#image").hide();
                $("#fadexxx").css("color", "#878787");
                $("#imformation").hide();
                $("#fadexxxx").css("color", "#878787");
            });
        });
        $(document).ready(function(){
            $("#fadexxx").click(function(){
                $("#safe").hide();
                $("#fadexx").css("color", "#878787");
                $("#image").show();
                $("#fadexxx").css("color", "#65C7E3");
                $("#imformation").hide();
                $("#fadexxxx").css("color", "#878787");
            });
        });
        $(document).ready(function(){
            $("#fadexxxx").click(function(){
                $("#safe").hide();
                $("#fadexx").css("color", "#878787");
                $("#image").hide();
                $("#fadexxx").css("color", "#878787");
                $("#imformation").show();
                $("#fadexxxx").css("color", "#65C7E3");
            });
        });
        window.onscroll = function() {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t > 0) {
                $("#top").css("background", "rgba(255,255,255,0.7)");
            }
            else {
                $("#top").css("background", "rgba(255,255,255,1)");
            }
        }
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
            <td style="padding: 10px;">
                <a id="a" href="follow.php">
                    <span>朋友圈子</span>
                </a>
            </td>
            <td style="background: white; padding: 10px;">

                <strong><span style="color: black;"><a id="a" href="setting.php" style="color: black;">账户</a><span id="fadex" style="cursor: pointer;">设置</span></span></strong>

            </td>
        </tr>
    </table>
</div >
<div id="menux" style="background: white; margin: 0px auto; width: 1100px; border-bottom: solid 1px #F1F2F3; display: none;">
    <table style="font-size: 14px; margin: 0px auto;">
        <tr>
            <td style="padding: 5px; cursor: pointer; color: #65C7E3;">
                <span id="fadexx">密码相关</span>
            </td>
            <td style="padding: 2px; color: white;">
                隐身
            </td>
            <td style="padding: 2px;cursor: pointer; color: #878787;">
                <span id="fadexxxx">个人信息</span>
            </td>
            <td style="padding: 2px; color: white;">
                隐身
            </td>
            <td style="padding: 2px;cursor: pointer; color: #878787;">
                <span id="fadexxx">头像背景</span>
            </td>
        </tr>
    </table>
</div>

<div id="safe" style="background: white; height:auto; !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px;">
    <div id="password">
        <form name="login-form" class="login-formx" action="process/user_update.php" method="post" style="margin-top: 20px;
                background: white; text-align: center;">
            <div class="content">
                <input type="password" name="oldpassword" class="input password" placeholder="原密码" style="margin: 25px 0px 20px 0px;"/>
                <input type="password" name="newpassword" class="input password" placeholder="新密码" style="margin: 0px 0px 20px 0px;"/>
                <input type="text" name="email" class="input password" placeholder="关联邮箱" style="margin: 0px 0px 15px 0px;"/>
            </div>
            <div class="footer" style="background: white;">
                <input type="submit" name="submit" class="button" value="更新" />
            </div>
        </form>
    </div>
</div>

<div id="image" style="background: white; height:auto; !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px; display: none;">
    <div id="password">
        <form name="login-form" class="login-formx" action="process/logo_update.php" method="post" enctype="multipart/form-data" style="margin-top: 45px;
                background: white; text-align: center; ">
            <div class="content">
                <span style="color: #9D9E9E;">头像</span>
                <input type="file" name="logo" class="input password" style="margin: 25px 0px 20px 0px;"/>
                <span style="color: #9D9E9E;">背景</span>
                <input type="file" name="img" class="input password" style="margin: 0px 0px 20px 0px;"/>
            </div>
            <div class="footer" style="background: white; padding-bottom: 0px;">
                <span style="color: white;">隐身</span>
                <input type="submit" name="submit" class="button" value="上传" />
            </div>
        </form>
    </div>
</div>

<div id="imformation" style="background: white; height:auto; !important; min-height: 340px; width: 1100px; margin: 0px auto 20px;
overflow:auto; padding-bottom: 12px; display: none;">
    <div id="password">
        <form name="login-form" class="login-formx" action="process/imformation.php" method="post" style="margin-top: 20px;
                background: white; text-align: center;">
            <div class="content">
                <input type="text" name="weibo" class="input password" placeholder="微博账号" style="margin: 25px 0px 20px 0px;"/>
                <input type="text" name="weixin" class="input password" placeholder="微信账号" style="margin: 0px 0px 20px 0px;"/>
                <input type="text" name="qq" class="input password" placeholder="QQ 账号" style="margin: 0px 0px 15px 0px;"/>
            </div>
            <div class="footer" style="background: white;">
                <input type="submit" name="submit" class="button" value="关联" />
            </div>
        </form>
    </div>
</div>

<?php
//require('./reutilization/up_3.php');
//require('./reutilization/bottom.php');
?>
</body>
</html>
