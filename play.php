<?php
session_start();
$title=$_GET['id'];
@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败。\');
                  </script>';
}
$select="select vip from video WHERE title='$title'";
$result=$db->query($select);
$row=$result->fetch_assoc();
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i");
//if ($row['vip']==1) {
//    if(isset($_SESSION['vip'])) {
//        if ($_SESSION['vip']!=$row['vip']) {
//            echo '<script type="text/javascript">alert(\'此视频仅限会员观看！\');</script>';
//            echo '<script>window.opener=null;window.open(\'\',\'_self\');window.close();</script>';
//        }
//
//    } else {
//        echo '<script type="text/javascript">alert(\'此视频仅限会员观看！\');</script>';
//        echo '<script>window.opener=null;window.open(\'\',\'_self\');window.close();</script>';
//    }
//}
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'consumer') {
        $username=$_SESSION['username'];
        $add = "insert into history (title, username, time) VALUES ('$title', '$username', '$time')";
        $result = $db->query($add);
    }
}

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
//            require('./reutilization/up_1.php');
        ?>
        #upgrade a {
            color: #9C9C9C;

        }
        #upgrade a:hover {
            color: #29A4F8;
        }
        /*#upgrade a:visited {*/
            /*color: #9C9C9C;*/
        /*}*/
        #body {
            margin: 0px auto;
            padding: 0px;
            background: #F1F2F3;
            z-index: 50;
            position:relative;
        }
        #fade {
            position: fixed;
            right: 10px;
            bottom: 5px;
            /*z-index: 98;*/
            /*cursor: pointer;*/
        }
        #fadex {
            position: fixed;
            right: 10px;
            bottom: 5px;
            display: none;
            /*z-index: 98;*/
            /*cursor: pointer;*/
        }
        #box {
            box-sizing: content-box;
            -webkit-box-sizing: content-box;
            /*height: 30px;*/
            width: 50px;
            /*margin: 50px 0px;*/
            padding: 10px 0px;
            /*border: solid 1px #56C2E1;*/
            /*background-color: #56C2E1;*/
            /*border-radius: 5px;*/
            /*color: black;*/
            /*font-size: 15px;*/
        }
        #box:hover {
            background: #dfe9ec;
            color: #29A4F8;
        }
        #box:focus {
            background: #dfe9ec;
            color: #29A4F8;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }
        #box {
            font-weight: 400;
            font-size: 16px;
            color: black;
            text-shadow: 1px 1px 0 rgba(255,255,255,1.0);

            background: #dfe9ec;
            border-radius: 5px;

            box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        }
        #a {
            color: red;
            margin: auto 0px;
        }
        #button {
            padding: 10px;
            /*width: 44px;*/
            background-color: #56C2E1;
            border: 1px solid #56C2E1;
            border-radius: 5px;
            color: black;
            font-size: 15px;
        }
        #play {
            /*float: left;*/
            position: relative;
            width: 960px;
            height: 583px;
            margin: 70px auto 29px;
            background: white;
            box-shadow: 0px 0px 20px #888888;
            border-radius: 5px;
            /*border: solid 1px red;*/
            z-index: 50;
        }
        #playx {
            position: absolute;
            width: 960px;
            height: 540px;
            margin-top: 49px;
            margin-left: 35px;
            /*background: white;*/
            /*box-shadow: 0px 15px 15px #888888;*/
            /*border-radius: 5px;*/
            /*border: solid 1px red;*/
            z-index: 99;
        }
        #playxx {
            position: absolute;
            width: 960px;
            height: 540px;
            margin-top: 49px;
            margin-left: 35px;
            /*display: none;*/
            /*background: white;*/
            /*box-shadow: 0px 15px 15px #888888;*/
            /*border-radius: 5px;*/
            border: solid 1px red;
            /*z-index: 10;*/
        }
        #imformation {
            width: 960px;
            height: auto;
            margin: 20px auto;
            padding-top: 20px;
            padding-bottom: 20px;
            background: white;
            border-radius: 5px;
            /*border: solid 1px red;*/
        }
        #imformationx {
            width: 920px;
            /*height: 590px;*/
            margin: 20px auto 0px;
            /*padding: 10px 0px;*/
            background: white;
            /*border: solid 1px red;*/
        }
        #comment {
            width: 960px;
            height: auto;
            margin: 20px auto -4px;
            padding-top: 20px;
            /*padding-bottom: 5px;*/
            background: white;
            border: solid 1px white;
            border-radius: 5px;
        }
        input:hover {
            background: #dfe9ec;
            color: #414848;
        }
        input:focus {
            background: #dfe9ec;
            color: #414848;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
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
        #right {
            background: white;
            position: fixed;
            right: 35px;
            top: 70px;
            width: 213px;
            height: 592px;
            border-radius: 5px;
            /*border: solid 1px red;*/
        }
        #others {
            height: 99px;
            width: 176px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*padding-right: 50px;*/
            /*border: solid 1px red;*/
        }
        #othersx {
            height: 113px;
            width: 200px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*padding-right: 50px;*/
            /*border: solid 1px red;*/
        }
        ::selection {
            color: #fff;
            background: #f676b2; /* Safari */
        }
        ::-moz-selection {
            color: #fff;
            background: #f676b2; /* Firefox */
        }

        /*******************
        BODY STYLING
        *******************/

        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        /*body {*/
        /*background: url(../img/bg.png) repeat;*/
        /*font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;*/
        /*font-weight:300;*/
        /*text-align: left;*/
        /*text-decoration: none;*/
        /*}*/
        #wrapperxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            background: rgba(0,0,0,0.5);
        }
        #wrapperx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            background: rgba(0,0,0,0.5);
        }
        #wrapper {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            background: rgba(0,0,0,0.5);

        }
        .title {
            /*background: rgba(0,0,0,0.5);*/
            height:20px;
            width: 150px;
            font-size: 13px;
            line-height:20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            margin-left: 25px;
        }
        #url {
            /*background: rgba(0,0,0,0.5);*/
            /*height:30px;*/
            width: 300px;
            /*font-size: 14px;*/
            /*line-height:14px;*/
            /*overflow: hidden;*/
            /*text-overflow: ellipsis;*/
            /*white-space: nowrap;*/
            color: #29A4F8;"
            /*margin-left: 25px;*/
            font-size: 13px;
            line-height: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            height: 30px;
        }
        #wrapperxxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            /*background: rgba(0,0,0,0.5);*/

        }
        #wrapperxxxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            /*background: rgba(0,0,0,0.5);*/

        }
        #wrapperxxxxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            /*background: rgba(0,0,0,0.5);*/

        }
        #wrapperxxxxxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            /*background: rgba(0,0,0,0.5);*/
            /*display: none;*/

        }
        #wrapperxxxxxxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            /*background: rgba(0,0,0,0.5);*/
            /*display: none;*/

        }
        #wrapperxxxxxxxx {
            /* Center wrapper perfectly */
            /*width: 300px;*/
            width: 100%;
            height: 100%;
            /*height: 400px;*/
            position: fixed;
            left: 0px;
            top: 0px;
            /*margin-left: -25%;*/
            /*margin-top: -25%;*/
            /*box-shadow: 0px 25px 25px #888888;*/
            z-index: 10;
            /*border: solid 1px red;*/
            /*background: rgba(0,0,0,0.5);*/
            /*display: none;*/

        }

        /*
        .gradient {
            width: 600px;
            height: 600px;
            position: fixed;
            left: 50%;
            top: 50%;
            margin-left: -300px;
            margin-top: -300px;

            background: url(../images/gradient.png) no-repeat;
        }
        */

        .gradient {
            /* Center Positioning */
            width: 500px;
            height: 500px;
            position: fixed;
            left: 50%;
            top: 50%;
            margin-left: -250px;
            margin-top: -250px;
            /*border: solid 1px red;*/

            /* Fallback */
            /*background-image: url(../img/gradient.png);*/
            /*background-repeat: no-repeat; */

            /* CSS3 Gradient */
            /*background-image: -webkit-gradient(radial, 0% 0%, 0% 100%, from(rgba(213,246,255,1)), to(rgba(213,246,255,0)));*/
            /*background-image: -webkit-radial-gradient(50% 50%, 40% 40%, rgba(213,246,255,1), rgba(213,246,255,0));*/
            /*background-image: -moz-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));*/
            /*background-image: -ms-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));*/
            /*background-image: -o-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));*/
        }

        /*******************
        LOGIN FORM
        *******************/

        .login-form {
            width: 300px;
            margin: 0 auto;
            position: relative;
            z-index:5;

            background: #f3f3f3;
            border: 1px solid #fff;
            border-radius: 5px;

            box-shadow: 0 1px 3px rgba(0,0,0,0.5);
            -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
            -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }

        /*******************
        HEADER
        *******************/

        .login-form .header {
            padding: 30px 0px 5px 0px;
            text-align: center;
            /*margin-bottom: -5px;*/
            /*border: solid 1px red;*/
        }

        /*.login-form .header h1 {*/
        /*!*font-family: 'Bree Serif', serif;*!*/
        /*font-weight: 300;*/
        /*font-size: 28px;*/
        /*line-height:34px;*/
        /*color: #414848;*/
        /*text-shadow: 1px 1px 0 rgba(256,256,256,1.0);*/
        /*margin-bottom: 10px;*/
        /*}*/

        /*.login-form .header span {*/
        /*font-size: 11px;*/
        /*line-height: 16px;*/
        /*color: #678889;*/
        /*text-shadow: 1px 1px 0 rgba(256,256,256,1.0);*/
        /*}*/

        /*******************
        CONTENT
        *******************/

        .login-form .content {
            padding: 25px 30px 25px 30px;
        }

        /* Input field */
        .login-form .content .input {
            width: 188px;
            padding: 15px 25px;

            /*font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;*/
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

        /* Second input field */
        .login-form .content .password, .login-form .content .pass-icon {
            margin-top: 25px;
        }

        .login-form .content .input:hover {
            background: #dfe9ec;
            color: #414848;
        }

        .login-form .content .input:focus {
            background: #dfe9ec;
            color: #414848;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }

        /*.user-icon, .pass-icon {*/
        /*width: 46px;*/
        /*height: 47px;*/
        /*display: block;*/
        /*position: absolute;*/
        /*left: 0px;*/
        /*padding-right: 2px;*/
        /*z-index: 3;*/
        /**/
        /*-moz-border-radius-topleft: 5px;*/
        /*-moz-border-radius-bottomleft: 5px;*/
        /*-webkit-border-top-left-radius: 5px;*/
        /*-webkit-border-bottom-left-radius: 5px;*/
        /*}*/

        /*.user-icon {*/
        /*top:159px; !* Positioning fix for slide-in, got lazy to think up of simpler method. *!*/
        /*background: rgba(65,72,72,0.75) url(../img/user-icon.png) no-repeat center;*/
        /*}*/

        /*.pass-icon {*/
        /*top:231px;*/
        /*background: rgba(65,72,72,0.75) url(../img/pass-icon.png) no-repeat center;*/
        /*}*/

        /* Animation */
        .input, .user-icon, .pass-icon, .button, .register {
            transition: all 0.5s;
            -moz-transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            -ms-transition: all 0.5s;
        }

        /*******************
        FOOTER
        *******************/

        .login-form .footer {
            text-align: center;
            padding: 40px 30px 40px 30px;
            overflow: auto;

            background: #d4dedf;
            border-top: 1px solid #fff;

            box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
            -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
            -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
        }

        /* Login button */
        .login-form .footer .button {
            /*float:right;*/
            padding: 11px 25px;

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

        .login-form .footer .button:hover {
            background: #3f9db8;
            border: 1px solid rgba(256,256,256,0.75);

            box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
            -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
            -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
        }

        .login-form .footer .button:focus {
            position: relative;
            bottom: -1px;

            background: #56c2e1;

            box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
            -moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
            -webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
        }

        /* Register button */
        .login-form .footer .register {
            display: block;
            float: right;
            padding: 10px;
            margin-right: 20px;
            border: solid 1px red;
            border-radius: 5px;

            background: none;
            border: none;
            cursor: pointer;

            /*font-family: 'Bree Serif', serif;*/
            font-weight: 300;
            font-size: 18px;
            color: #414848;
            text-shadow: 0px 1px 0 rgba(256,256,256,0.5);
        }
        #input {
            font-weight: 400;
            font-size: 13px;
            color: #9d9e9e;
            text-shadow: 1px 1px 0 rgba(256,256,256,1.0);

            background: #fff;
            border: 1px solid #fff;
            border-radius: 5px;

            box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
            -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        }
        #input:hover {
            background: #dfe9ec;
            color: #29A4F8;
        }
        #input:focus {
            background: #dfe9ec;
            color: #29A4F8;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }
        select {
            -moz-appearance: none;
            appearance: none;
            background: url(img/select.png) no-repeat scroll right center transparent;
        }
        #inputx:hover {
            background: #dfe9ec;
            color: #414848;
        }
        #inputx:focus {
            background: #dfe9ec;
            color: #414848;

            box-shadow: inset 0 1px 2px rgba(255,255,255,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(255,255,255,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(255,255,255,0.25);
        }
        #inputx {
            font-weight: 400;
            font-size: 14px;
            color: #9d9e9e;
            text-shadow: 1px 1px 0 rgba(255,255,255,0.25);

            background: #fff;
            border: 1px solid #fff;
            border-radius: 5px;

            box-shadow: inset 0 1px 3px rgba(255,255,255,0.25);
            -moz-box-shadow: inset 0 1px 3px rgba(255,255,255,0.25);
            -webkit-box-shadow: inset 0 1px 3px rgba(255,255,255,0.25);
        }
        textarea:hover {
            background: #dfe9ec;
            color: #414848;
        }
        textarea:focus {
            background: #dfe9ec;
            color: #414848;

            /*box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
            /*-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
            /*-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
        }
    </style>
    <script type="text/javascript">
        <?php
//        require('./reutilization/up_2.php');
        ?>
        $(document).ready(function(){
            $("#signin").click(function(){
//                $("#wrapper").toggle();
                $("#wrapper").css("z-index",99);
                $("#play").css("box-shadow","0px 0px 0px #888888");

            });
        });
        $(document).ready(function(){
            $("#logo").click(function(){
//                $("#wrapper").toggle();
                $("#wrapper").css("z-index",10);
                $("#play").css("box-shadow","0px 0px 20px #888888");
                $("#username").val("");
                $("#password").val("");

            });
        });
        $(document).ready(function(){
            $("#signup").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperx").css("z-index",99);
                $("#play").css("box-shadow","0px 0px 0px #888888");

            });
        });
        $(document).ready(function(){
            $("#logox").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperx").css("z-index",10);
                $("#play").css("box-shadow","0px 0px 20px #888888");
                $("#usernamex").val("");
                $("#passwordx").val("");
                $("#passwordxx").val("");
                $("#email").val("");

            });
        });
        $(document).ready(function(){
            $("#findback").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperxx").css("z-index",99);
                $("#wrapper").css("z-index",10);
                $("#username").val("");
                $("#password").val("");

            });
        });
        $(document).ready(function(){
            $("#logoxx").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperxx").css("z-index",10);
                $("#play").css("box-shadow","0px 0px 20px #888888");
                $("#usernamexx").val("");
                $("#emailx").val("");

            });
        });
<?php
//$weibo_count=0;
//$weixin_count=0;
//$qq_count=0;
//
//if (isset($_SESSION['username'])) {
//    $user=$_SESSION['username'];
//    $weibo_select="select weibo from login WHERE username='$user'";
//    $weibo_result=$db->query($weibo_select);
//    $weibo_count=$weibo_result->num_rows;
//
//    $weixin_select="select wexin from login WHERE username='$user'";
//    $weixin_result=$db->query($weixin_select);
//    $weixin_count=$weixin_result->num_rows;
//
//    $qq_select="select qq from login WHERE username='$user'";
//    $qq_result=$db->query($qq_select);
//    $qq_count=$qq_result->num_rows;
//
//}
//
//if ($weibo_count>0) {
//    echo '
//        $(document).ready(function(){
//            $("#wb").click(function(){
////                $("#wrapper").toggle();
//                $("#wrapperxxx").css("z-index",99);
////                $("#play").css("box-shadow","0px 0px 0px #888888");
//            });
//        });
//    ';
//} else {
//    echo '
//        $(document).ready(function(){
//            $("#wb").click(function(){
//                alert("请在账户设置中关联微博账户。");
//            });
//        });
//    ';
//}
////
//if ($weixin_count>0) {
//    echo '
//        $(document).ready(function(){
//            $("#wx").click(function(){
////                $("#wrapper").toggle();
//                $("#wrapperxxxx").css("z-index",99);
////                $("#play").css("box-shadow","0px 0px 0px #888888");
//            });
//        });
//    ';
//} else {
//    echo '
//        $(document).ready(function(){
//            $("#wx").click(function(){
//                alert("请在账户设置中关联微信账户。");
//        });
//    ';
//}
//
//if ($qq_count>0) {
//    echo '
//        $(document).ready(function(){
//            $("#qq").click(function(){
////                $("#wrapper").toggle();
//                $("#wrapperxxxxx").css("z-index",99);
////                $("#play").css("box-shadow","0px 0px 0px #888888");
//            });
//        });
//    ';
//} else {
//    echo '
//        $(document).ready(function(){
//            $("#qq").click(function(){
//                alert("请在账户设置中关联 QQ 账户。");
//            });
//        });
//    ';
//}
//?>
        $(document).ready(function(){
            $("#wb").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperxxx").css("z-index",99);
//                $("#play").css("box-shadow","0px 0px 0px #888888");
            });
        });
        $(document).ready(function(){
            $("#cancel").click(function(){
                $("#wrapperxxx").css("z-index",10);
                $("#textarea").val("");
//                $("#play").css("box-shadow","0px 0px 20px #888888");

            });
        });
        $(document).ready(function(){
            $("#share").click(function(){
                $("#wrapperxxx").css("z-index",10);
                $("#wrapperxxxxxx").css("z-index",99);
                $("#textarea").val("");
//                $("#play").css("box-shadow","0px 0px 20px #888888");

            });
        });
        $(document).ready(function(){
            $("#wx").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperxxxx").css("z-index",99);
//                $("#play").css("box-shadow","0px 0px 0px #888888");
            });
        });
        $(document).ready(function(){
            $("#cancelx").click(function(){
                $("#wrapperxxxx").css("z-index",10);
                $("#textareax").val("");
//                $("#play").css("box-shadow","0px 0px 20px #888888");

            });
        });
        $(document).ready(function(){
            $("#sharex").click(function(){
                $("#wrapperxxxx").css("z-index",10);
                $("#wrapperxxxxxxx").css("z-index",99);
                $("#textareax").val("");
//                $("#play").css("box-shadow","0px 0px 20px #888888");

            });
        });
        $(document).ready(function(){
            $("#qq").click(function(){
//                $("#wrapper").toggle();
                $("#wrapperxxxxx").css("z-index",99);
//                $("#play").css("box-shadow","0px 0px 0px #888888");
            });
        });
        $(document).ready(function(){
            $("#cancelxx").click(function(){
                $("#wrapperxxxxx").css("z-index",10);
                $("#textareaxx").val("");
//                $("#play").css("box-shadow","0px 0px 20px #888888");

            });
        });
        $(document).ready(function(){
            $("#sharexx").click(function(){
                $("#wrapperxxxxx").css("z-index",10);
                $("#wrapperxxxxxxxx").css("z-index",99);
                $("#textareaxx").val("");
//                $("#play").css("box-shadow","0px 0px 20px #888888");

            });
        });
        $(document).ready(function(){
            $("#fade").click(function(){
                $("#right").fadeToggle("slow");
                $("#imformation").fadeToggle("slow");
                $("#comment").fadeToggle("slow");
                $("#fade").fadeToggle("slow");
                $("#fadex").fadeToggle("slow");
                $("#bottom").fadeToggle("slow");
                $("#body").css("background","black");
                $(".body").css("background","black");
                $("#play").css("box-shadow","0px 0px 0px #888888");

//                $("#right").css("background","#2B2B2B");
//                $("#play").css("background","#2B2B2B");
//                $("#imformation").css("background","#2B2B2B");
//                $("#comment").css("background","#2B2B2B");

            });
        });
        $(document).ready(function(){
            $("#fadex").click(function(){
                $("#right").fadeToggle("slow");
                $("#imformation").fadeToggle("slow");
                $("#comment").fadeToggle("slow");
                $("#fade").fadeToggle("slow");
                $("#fadex").fadeToggle("slow");
                $("#bottom").fadeToggle("slow");
                $("#body").css("background","#F1F2F3");
                $(".body").css("background","#F1F2F3");
                $("#play").css("box-shadow","0px 0px 20px #888888");
//                $("#right").css("background","#2B2B2B");
//                $("#play").css("background","#2B2B2B");
//                $("#imformation").css("background","#2B2B2B");
//                $("#comment").css("background","#2B2B2B");

            });
        });
        $(function(){
            $(window).scroll(function() {
                if ( $(this).scrollTop() > 5) {
                    $("#img1").fadeOut("slow");
                    $("#img2").fadeOut("slow");
                    $("#img3").fadeOut("slow");
                    $("#img4").fadeOut("slow");
                    $("#img5").fadeOut("slow");
                }
                else {
                    $("#img1").fadeIn("slow");
                    $("#img2").fadeIn("slow");
                    $("#img3").fadeIn("slow");
                    $("#img4").fadeIn("slow");
                    $("#img5").fadeIn("slow");
                }
                if ( $(this).scrollTop() > 80){
                    $("#top").css("background","rgba(255,255,255,0.6)");
                } else {
                    $("#top").css("background","rgba(255,255,255,1)");
                }
            });
        });
        $(document).ready(function(){

            $("#right").hover(function(){
                $("#right").css("box-shadow","0px 0px 15px #888888");
//                $("#right").css("background","white");
                $("#play").css("box-shadow","0px 0px 0px #888888");
            }, function() {
                $("#right").css("box-shadow","0px 0px 0px #888888");
//                $("#right").css("background","#F1F2F3");
                $("#play").css("box-shadow","0px 0px 20px #888888");
            });
            $("#comment").hover(function(){
                $("#comment").css("box-shadow","0px 0px 15px #888888");
//                $("#comment").css("background","white");
                $("#play").css("box-shadow","0px 0px 0px #888888");
            }, function() {
                $("#comment").css("box-shadow","0px 0px 0px #888888");
//                $("#comment").css("background","#F1F2F3");
                $("#play").css("box-shadow","0px 0px 20px #888888");
            });
            $("#imformation").hover(function(){
                $("#imformation").css("box-shadow","0px 0px 15px #888888");
//                $("#imformation").css("background","white");
//                $("#imformationx").css("background","white");
                $("#play").css("box-shadow","0px 0px 0px #888888");
            }, function() {
                $("#imformation").css("box-shadow","0px 0px 0px #888888");
//                $("#imformation").css("background","#F1F2F3");
//                $("#imformationx").css("background","#F1F2F3");
                $("#play").css("box-shadow","0px 0px 20px #888888");
            });
        });
    </script>
    <script type="text/javascript">
        function run(){
            var s = document.getElementById("time");
            var play=document.getElementById("video");
            if(s.innerHTML == 1){
                clearInterval(process);
                $("#playx").css("z-index",10);
                $("#video").fadeIn("fast");
                $("#vip").fadeIn("fast");
                play.play();
                runx();
                processx = window.setInterval("runx();", 1000);
            }
            s.innerHTML = s.innerHTML * 1 - 1;
        }
        process = window.setInterval("run();", 1000);
    </script>
</head>
<body class="body">
<div id="body" style="border: solid 1px black;">
<div id="top">
    <a href="index.php">
        <img src="img/non.png" style="padding: 4px; margin-left: 20px;">
    </a>
    <div  id="search" style="margin: 0px; padding: 0px; width: auto;">
        <form action="search.php" method="post">
            <input id="inputx" style="height: 40px; width: 300px; margin: 5px 0px 5px 0px;
                   border: solid 1px #29A4F8; background-color: transparent; border-radius: 5px;"
                   type="search" name="search" placeholder="&nbsp;&nbsp;&nbsp;搜索..." />
            <select id="select" name="tag" style="height: 40px; width: 66px; font-size: small;
                    background-color: transparent; border-radius: 5px; border: solid 1px #29A4F8; color: #29A4F8;">
                <option value="all">所有</option>
                <option value="tv">剧集</option>
                <option value="movie">电影</option>
                <option value="mv">音乐</option>
                <option value="cartoon">动画</option>
                <option value="science">科技</option>
                <option value="game">游戏</option>
                <option value="tv">综艺</option>
                <option value="movie">新闻</option>
                <option value="mv">娱乐</option>
                <option value="cartoon">财经</option>
                <option value="science">体育</option>
                <option value="game">少儿</option>
            </select>
        </form>
    </div>
    <a href="user.php">
        <img id="img4" src="img/home.png" style="padding-bottom: 5px; margin-left: 568px;">
    </a>
    <a href="subscribe.php">
        <img id="img3" src="img/dy.png" style="padding: 4px; margin-left: 28px;">
    </a>
    <a href="favorites.php">
        <img id="img2" src="img/sc.png" style="padding: 3px; margin-left: 25px;">
    </a>
    <a href="follow.php">
        <img id="img5" src="img/fans.png" style="padding: 3px; margin-left: 25px;">
    </a>
    <a href="setting.php">
        <img id="img1" src="img/ls.png" style="padding: 3px; margin-left: 23px;">
    </a>
    <table id="menu">
        <tr>
            <td>
                <?php
                if(isset($_SESSION['role'])) {
                    if($_SESSION['role'] == 'admini') {
                        echo '<span style="margin: 0px 20px 0px 0px; color: #459686;">'.
                            $_SESSION['username'].'</span>';
                    }
                    else {
                        echo '<span style="margin: 0px 20px 0px 0px; color: #459686;">'.
                            $_SESSION['username'].'</span>';
                    }
                }
                else {
                    echo '<a id="signin"><span style="margin: 0px 20px 0px 0px; color: #459686; cursor: pointer;">登录</span></a>';
                }
                ?>
            </td>
            <td>
                <?php
                if(isset($_SESSION['role'])) {
                    if($_SESSION['role'] == 'admini' || $_SESSION['role'] == 'consumer') {
                        echo '<a href="process/signout.php"><span style="color: #459686;">退出
                              </span></a> ';
                    }
                }
                else {
                    echo '<a id="signup"><span style="color: #459686; cursor: pointer;">注册</span></a>';
                }
                ?>
            </td>
        </tr>
    </table>
</div>

<?php
$select_9 = "select tagx from video WHERE (title='$title')";
$result_9=$db->query($select_9);
$row_9=$result_9->fetch_assoc();
$tagx_9=$row_9['tagx'];

$select_10 = "select tag from cover WHERE (title='$title')";
$result_10=$db->query($select_10);
$row_10=$result_10->fetch_assoc();
$tag_10=$row_10['tag'];

$select_11 = "select title from cover WHERE (tag='$tag_10')";
$result_11=$db->query($select_11);
$count_11=$result_11->num_rows;
$title_11=[];
if($count_11 > 0) {
    $j=0;
    for($i=$count_11; $i>0; $i--) {
        $row_11=$result_11->fetch_assoc();
        $title_11[]=$row_11['title'];
//        $j++;
//        if($j>4)
//            break;
    }
}
$a=rand(0,1);
$b=rand(2,3);
$c=rand(4,5);
$d=rand(6,7);
$e=rand(8,9);
//echo $title_11[0];
?>
<div id="right">
    <div style="padding-top: 16px;">
        <div>
            <p style="margin: 0px 0px 0px 19px;">相关推荐</p>
        </div>
        <div style="margin: 0 auto; width: 176px; height: 1px; background: #F1F2F3;">
        </div>
    </div>
    <table cellspacing="8" style="padding: 0px 0px 0px 2.5px;">
        <tr>
            <td>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_11[$a].'.png" valign="bottom">
                            <div style="padding-bottom: 28px;">
                                <img src="img/shit2.png">
                            </div>
                            <div class="titlexxx">
                            <a class="hrefxx" href="play.php?id='.$title_11[$a].'">
                                <span>&nbsp;&nbsp;&nbsp;'.$title_11[$a].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_11[$b].'.png" valign="bottom">
                            <div style="padding-bottom: 28px;">
                                <img src="img/shit7.png">
                            </div>
                            <div class="titlexxx">
                            <a class="hrefxx" href="play.php?id='.$title_11[$b].'">
                                <span>&nbsp;&nbsp;&nbsp;'.$title_11[$b].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_11[$c].'.png" valign="bottom">
                            <div class="titlexxx">
                            <a class="hrefxx" href="play.php?id='.$title_11[$c].'">
                                <span>&nbsp;&nbsp;&nbsp;'.$title_11[$c].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_11[$d].'.png" valign="bottom">
                            <div style="padding-bottom: 28px;">
                                <img src="img/shit3.png">
                            </div>
                            <div class="titlexxx">
                            <a class="hrefxx" href="play.php?id='.$title_11[$d].'">
                                <span>&nbsp;&nbsp;&nbsp;'.$title_11[$d].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_11[$e].'.png" valign="bottom">
                            <div class="titlexxx">
                            <a class="hrefxx" href="play.php?id='.$title_11[$e].'">
                                <span>&nbsp;&nbsp;&nbsp;'.$title_11[$e].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </td>
        </tr>
    </table>
</div>

<div style="width: 1030px;">
<!--    <form style="text-align: center;" action="process/comment.php" method="post">-->
<?php
        if(!isset($_SESSION['vip']) || $_SESSION['vip']=='2') {
            $ad = array('新垣結衣_1', 'UNIQLO KIDS', 'AirPods', '新垣結衣_2', 'UNIQLO SPORT');
            $ax=rand(0,4);
            echo '
                <div id="playx">
                    <div style="position: absolute; margin-left: 840px; margin-top: 20px; background: rgba(0,0,0,0.4);">
                        <p id="ad" style="padding: 5px 7px;; color: white; font-size: 16px;">广告：<span id="time">16</span>&nbsp;秒</p>
                    </div>
                    <video width="960" height="540" autoplay="autoplay">
                        <source src="temp/'.$ad[$ax].'.mp4" type="video/mp4">
                    </video>
                </div>
            ';
            if ($row['vip']!=1) {
                    echo '   
                        <div id="play">
                        <div id="head" style="padding: 20px 0px 3px 0px;">
                        &nbsp;&nbsp;&nbsp; <a href="process/favorites.php?id=' . $title . '">
                                <img src="img/favorites.png" style="float: right; margin: -3px 5px 0px 0px;">
                            </a>
                            <a href="process/subscribe.php?id=' . $row_10['tag'] . '">
                                <img src="img/subscirbe.png" style="float: right; margin: -4px 5px 0px 0px;">
                            </a>
                            <div style="float: left;">
                                <span style="font-size: 20px;"><span style="color: #29A4F8">「' . $tagx_9 . '」</span>' . $title . '</span>
                            </div>
                        </div>
                        <div>
                            <video id="video" width="960" height="540" controls="controls" style="display: none;">
                                <source src="temp/' . $title . '.mp4" type="video/mp4">
                            </video>
                        </div>
                        </div>
                ';
            } else {
                echo '   
                        <div id="play">
                        <div id="head" style="padding: 20px 0px 3px 0px;">
                        &nbsp;&nbsp;&nbsp; <a href="process/favorites.php?id=' . $title . '">
                                <img src="img/favorites.png" style="float: right; margin: -3px 5px 0px 0px;">
                            </a>
                            <a href="process/subscribe.php?id=' . $row_10['tag'] . '">
                                <img src="img/subscirbe.png" style="float: right; margin: -4px 5px 0px 0px;">
                            </a>
                            <div style="float: left;">
                                <span style="font-size: 20px;"><span style="color: #29A4F8">「' . $tagx_9 . '」</span>' . $title . '</span>
                            </div>
                            <img src="img/vipx.png" style="float: left; margin-top: -3px;margin-left: 3px;">
                            ';
                if (isset($_SESSION['vip'])) {
                    echo '
                        <div id="upgrade" style="float: left; margin-left: 3px; margin-bottom: -8px; margin-top: 9px;">
                            <a href="user.php" style="font-size: 12px;">升级会员</a>
                        </div>
                    ';
                }
                echo '
                        </div>
                        <div>
                            <div id="vip" style="position: absolute; margin-left: 840px; margin-top: 29px; background: rgba(0,0,0,0.4); display: none;">
                                <p style="padding: 5px 7px;; color: white; font-size: 16px;">试看：<span id="timex">16</span>&nbsp;秒</p>
                            </div>
                            <video id="video" width="960" height="540" style="display: none;">
                                <source src="temp/' . $title . '.mp4" type="video/mp4">
                            </video>
                        </div>
                        </div>
                ';
                echo '
                    <script>
                    function runx(){
                            var sx = document.getElementById("timex");
                            var playx=document.getElementById("video");
                            if(sx.innerHTML == 1){
                                clearInterval(processx);
                                playx.pause();
//                                $("#video").controls=false;
                            }
                            sx.innerHTML = sx.innerHTML * 1 - 1;
                        };
                    </script>
                ';
            }
        }
        else {
            echo '   
                    <div id="play">
                    <div id="head" style="padding: 20px 0px 3px 0px;">
                    &nbsp;&nbsp;&nbsp; <a href="process/favorites.php?id='.$title.'">
                            <img src="img/favorites.png" style="float: right; margin: -3px 5px 0px 0px;">
                        </a>
                        <a href="process/subscribe.php?id='.$row_10['tag'].'">
                            <img src="img/subscirbe.png" style="float: right; margin: -4px 5px 0px 0px;">
                        </a>
                        <div style="float: left;">
                                <span style="font-size: 20px;"><span style="color: #29A4F8">「' . $tagx_9 . '」</span>' . $title . '</span>
                        </div>
                        ';
            if ($row['vip']==1) {
                echo '
                    <img src="img/vipx.png" style="float: left; margin-top: -3px;margin-left: 3px;">
                ';
            }
            echo'
                    </div>
                    <div>
                        <video width="960" height="540" controls="controls" autoplay="autoplay">
                            <source src="temp/'.$title.'.mp4" type="video/mp4">
                        </video>
                    </div>
                    </div>
                    ';
        }
?>
<?php
        $select_1="select imformation from video WHERE title='$title'";
        $result_1=$db->query($select_1);
        $row_1=$result_1->fetch_assoc();
        echo '
                <div id="imformation">
               
                <div>
                    <img src="img/info.png" style="float: left; margin: -5px 0px 0px 20px;">
                    <p style="margin: 0px 0px 0px 60px; font-size: 20px;">视频简介<span style="font-size: 12px; color: #9C9C9C; margin-left: 633px;">分享至</span></p>
                    <img id="wb" src="img/wb.png" style="float: right; margin: -33px 110px 0px 0px; cursor: pointer;">
                    <img id="wx" src="img/wx.png" style="float: right; margin: -33px 65px 0px 0px; cursor: pointer;">
                    <img id="qq" src="img/qq.png" style="float: right; margin: -33px 20px 0px 0px; cursor: pointer;">
                </div>
                
                <div style="padding: 0px; margin: 0px auto; width: 920px; height: 1px; background: #F0F0F0;">
                <br/>
                </div>
                
                <div id="imformationx">
                    <span style="font-size: 15px;">'.$row_1['imformation'].'</span>
                </div>
                
                </div>
        ';
?>
<?php
    echo '
        <div id="comment">
        <form action="process/comment.php" method="post">
            <div style="margin: 0px auto 20px; width: 565px;">
                <img src="img/lbx.png" style="margin-bottom: -14px; margin-right: 10px; margin-left: -5px;">
                <input style="height: 45px; width: 450px; border: solid 1px #F0F0F0; border-radius: 5px;" type="search" name="comment" placeholder="&nbsp;&nbsp;&nbsp;说点什么吧..." />
                <input id="box" type="submit" value="评论" style="cursor: pointer;"/>
            </div >
            <div style="margin: 0px auto; width: 565px; height: 1px; background: #F0F0F0; ">
                <br/>
            </div>
            <div style="margin: 0px auto; width: 565px; height: 10px; background: white; ">
                <br/>
            </div>
            <div style="margin: 20px auto 0px; width: 565px; font-size: 15px;">
    ';
    if(isset($_SESSION['role'])) {
        $select_4 = "select tag from video WHERE (title='$title')";
        $result_5 = $db->query($select_4);
        $row_3 = $result_5->fetch_assoc();
        $tag = $row_3['tag'];
        $username = $_SESSION['username'];
        //                    echo $tag.$username;
        $update_2 = "update login set tag='$tag' WHERE username='$username'";
        $result6 = $db->query($update_2);
//        if ($result6)
//            echo '1';
//        else
//            echo '0';
//        $select_4 = "select tag from login WHERE (username='$_SESSION[username]')";
    }
    $select_3="select watch from video WHERE (title='$title')";
    $result_3=$db->query($select_3);
    $row_2=$result_3->fetch_assoc();
    $watch=$row_2['watch'] + 1;
//    echo $watch;
//    echo $row_2['watch'];
    $update_1="update video set watch='$watch' WHERE title='$title'";
    $result4 = $db->query($update_1);
    $select_2="select username, content, count from comment WHERE title='$title' ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count=$result_2->num_rows;
    $_SESSION['title']=$title;
    if($count > 0) {
            for($i=$count; $i>0; $i--) {
                $row_2=$result_2->fetch_assoc();
                echo '<p style="margin: 0px 0px 20px 57px; padding: 0px; height: 30px;">';
                echo '
                    <img src="img/person.png" style="float: left; margin: -10px 0px 0px 3px;">
                    ';
                if (isset($_SESSION['username'])) {
                    if ($row_2['username']!=$_SESSION['username']) {
                        echo '
                            <span style="font-size: 20px"><strong>&nbsp;<a style="color: #459686;" href="friend.php?friend='.$row_2['username'].'" target=\'_blank\'>'.$row_2['username'].' </a></strong>：</span><span style="font-size: 16px;">&nbsp;&nbsp;&nbsp;'.$row_2['content'].'</span>
                        ';
                    } else {
                        echo '
                        <span style="font-size: 20px; color: #459686;"><strong>&nbsp;'.$row_2['username'].' </strong>：</span><span style="font-size: 16px;">&nbsp;&nbsp;&nbsp;'.$row_2['content'].'</span>
                    ';
                    }
                } else {
                    echo '
                        <span style="font-size: 20px; color: #459686;"><strong>&nbsp;'.$row_2['username'].' </strong>：</span><span style="font-size: 16px;">&nbsp;&nbsp;&nbsp;'.$row_2['content'].'</span>
                    ';
                }
                if (isset($_SESSION['role'])) {
                    echo '
                        <a href="process/like.php?content='.$row_2['content'].'&username='.$row_2['username'].'&title='.$title.'">
                    ';
                }
                echo '<img src="img/dz.png" style="margin-bottom: -2px;">';
                if (isset($_SESSION['role'])) {
                    echo '
                        </a>
                    ';
                }
                if ($row_2['count']!=0) {
                    echo '
                        <span style="color: #29A4F8">+'.$row_2['count'].'</span>
                    ';
                }
                if(isset($_SESSION['role'])) {
//                    $select_4="select tag from video WHERE (title='$title')";
//                    $result_5=$db->query($select_4);
//                    $row_3=$result_5->fetch_assoc();
//                    $tag=$row_3['tag'];
//                    $username=$_SESSION['username'];
////                    echo $tag.$username;
//                    $update_2="update login set tag='$tag' WHERE username='$username'";
//                    $result6= $db->query($update_2);
//                    if($result6)
//                        echo '1';
//                    else
//                        echo '0';
//                    $select_4="select tag from login WHERE (username='$_SESSION[username]')";
                        if($row_2['username']==$_SESSION['username']) {
                            echo '
                            <a id="a" href="process/comment_delete.php?content='.$row_2['content'].'&username='.$row_2['username'].'&title='.$title.'">
                            <input id="input" type="button" value="删除"/>
                            </a>
                        ';
                        }
                }
                echo '</p>';
            }
        }
    echo '
        </div>
        </form>
        </div>
    ';
?>
</div>
<?php
//require('./reutilization/up_3.php');
require('./reutilization/bottom.php');
?>
    <img id="fade" src="img/light_1.png" style="cursor: pointer;">
    <img id="fadex" src="img/light_2.png" style="cursor: pointer;">
</div>


<div id="wrapperxxx">
        <div style="position: fixed; top: 50%; left: 50%; width: 350px; height: 420px;">
            <div style="width: 350px; height: 420px; margin-top: -210px; margin-left: -175px; background: white; box-shadow: 0px 0px 5px #FF6666; border-radius: 7px;">
                <div style="margin: 0px auto; width: 50px; height: 50px; padding: 10px 0px 15px;">
                    <img src="img/wbx.png">
                </div>
                <div style="margin-left: 25px; margin-bottom: 2px;">
                    <p><strong>分享到微博</strong></p>
                </div>
                <div style="width: 300px; margin: 0px auto 15px;">
                    <textarea id="textarea" style="border: solid 1px grey; width: 300px; font-size: 13px;" rows="5" placeholder="&nbsp;说点什么吧..."></textarea>
                </div>
                <?php
                    echo '
                        <div id="url" style="margin-left: 25px; margin-bottom: 10px;">https://localhost/play.php?id='.$title.'</div>
                    ';
                    echo '<div class="title">'.$title.'</div>';
                    echo '
                        <table style="margin-left: 25px; margin-bottom: 12px;">
                            <td id="othersx" background="temp/'.$title.'.png"></td>
                        </table>
                    ';
                    echo '
                        <table style="margin-left: 220px;">
                            <tr>
                                <td>
                                    <button id="cancel" type="button" style="background: #E6162D; width: 50px; height: 30px; color: white; border-radius: 3px; font-size: 14px; margin-right: 2px; cursor: pointer;">取消</button>
                                </td>
                                <td>
                                    <button id="share" type="button" style="background: #E6162D; width: 50px; height: 30px; color: white; border-radius: 3px; font-size: 14px; cursor: pointer;">分享</button>
                                </td>
                            </tr>
                        </table>
                    ';
                ?>
            </div>
        </div>
</div>
<div id="wrapperxxxx">
        <div style="position: fixed; top: 50%; left: 50%; width: 350px; height: 420px;">
            <div style="width: 350px; height: 420px; margin-top: -210px; margin-left: -175px; background: white; box-shadow: 0px 0px 5px #99CC33; border-radius: 7px;">
                <div style="margin: 0px auto; width: 50px; height: 50px; padding: 10px 0px 15px;">
                    <img src="img/wxx.png">
                </div>
                <div style="margin-left: 25px; margin-bottom: 2px;">
                    <p><strong>分享到微信</strong></p>
                </div>
                <div style="width: 300px; margin: 0px auto 15px;">
                    <textarea id="textareax" style="border: solid 1px grey; width: 300px; font-size: 13px;" rows="5" placeholder="&nbsp;说点什么吧..."></textarea>
                </div>
                <?php
                    echo '
                        <div id="url" style="margin-left: 25px; margin-bottom: 10px;">https://localhost/play.php?id='.$title.'</div>
                    ';
                    echo '<div class="title">'.$title.'</div>';
                    echo '
                        <table style="margin-left: 25px; margin-bottom: 12px;">
                            <td id="othersx" background="temp/'.$title.'.png"></td>
                        </table>
                    ';
                    echo '
                        <table style="margin-left: 220px;">
                            <tr>
                                <td>
                                    <button id="cancelx" type="button" style="cursor: pointer; background: #1ABB0E; width: 50px; height: 30px; color: white; border-radius: 3px; font-size: 14px; margin-right: 2px;">取消</button>
                                </td>
                                <td>
                                    <button id="sharex" type="button" style="cursor: pointer; background: #1ABB0E; width: 50px; height: 30px; color: white; border-radius: 3px; font-size: 14px;">分享</button>
                                </td>
                            </tr>
                        </table>
                    ';
                ?>
            </div>
        </div>
</div>
<div id="wrapperxxxxx">
        <div style="position: fixed; top: 50%; left: 50%; width: 350px; height: 420px;">
            <div style="width: 350px; height: 420px; margin-top: -210px; margin-left: -175px; background: white; box-shadow: 0px 0px 10px black; border-radius: 7px;">
                <div style="margin: 0px auto; width: 50px; height: 50px; padding: 10px 0px 15px;">
                    <img src="img/qqx.png">
                </div>
                <div style="margin-left: 25px; margin-bottom: 2px;">
                    <p><strong>分享到QQ</strong></p>
                </div>
                <div style="width: 300px; margin: 0px auto 15px;">
                    <textarea id="textareaxx" style="border: solid 1px grey; width: 300px; font-size: 13px;" rows="5" placeholder="&nbsp;说点什么吧..."></textarea>
                </div>
                <?php
                    echo '
                        <div id="url" style="margin-left: 25px; margin-bottom: 10px;">https://localhost/play.php?id='.$title.'</div>
                    ';
                    echo '<div class="title">'.$title.'</div>';
                    echo '
                        <table style="margin-left: 25px; margin-bottom: 12px;">
                            <td id="othersx" background="temp/'.$title.'.png"></td>
                        </table>
                    ';
                    echo '
                        <table style="margin-left: 220px;">
                            <tr>
                                <td>
                                    <button id="cancelxx" type="button" style="cursor: pointer; background: #37474F; width: 50px; height: 30px; color: white; border-radius: 3px; font-size: 14px; margin-right: 2px;">取消</button>
                                </td>
                                <td>
                                    <button id="sharexx" type="button" style="cursor: pointer; background: #37474F; width: 50px; height: 30px; color: white; border-radius: 3px; font-size: 14px;">分享</button>
                                </td>
                            </tr>
                        </table>
                    ';
                ?>
            </div>
        </div>
</div>

<script>
    $(document).ready(function(){
        $("#share").click(function(){
            setTimeout((function() {
                $("#wrapperxxxxxx").fadeOut("slow");
            }), 1000);
        });
    });
</script>
<div id="wrapperxxxxxx">
    <div style="position: fixed; top: 50%; left: 50%; width: 100px; height: 30px;">
        <div style="width: 100px; height: 30px; margin-top: -25px; margin-left: -50px; background: rgba(230,22,45,0.7); box-shadow: 0px 0px 5px #29A4F8;
        border-radius: 5px; color: white; text-align: center; padding-top: 8px;">
            分享成功&nbsp;
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#sharex").click(function(){
            setTimeout((function() {
                $("#wrapperxxxxxxx").fadeOut("slow");
            }), 1000);
        });
    });
</script>
<div id="wrapperxxxxxxx">
    <div style="position: fixed; top: 50%; left: 50%; width: 100px; height: 30px;">
        <div style="width: 100px; height: 30px; margin-top: -25px; margin-left: -50px; background: rgba(26,187,14,0.7); box-shadow: 0px 0px 5px #29A4F8;
        border-radius: 5px; color: white; text-align: center; padding-top: 8px;">
            分享成功&nbsp;
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#sharexx").click(function(){
            setTimeout((function() {
                $("#wrapperxxxxxxxx").fadeOut("slow");
            }), 1000);
        });
    });
</script>
<div id="wrapperxxxxxxxx">
    <div style="position: fixed; top: 50%; left: 50%; width: 100px; height: 30px;">
        <div style="width: 100px; height: 30px; margin-top: -25px; margin-left: -50px; background: rgba(55,71,79,0.7); box-shadow: 0px 0px 5px #29A4F8;
        border-radius: 5px; color: white; text-align: center; padding-top: 8px;">
            分享成功&nbsp;
        </div>
    </div>
</div>


<div id="wrapper">

    <!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

    <!--LOGIN FORM-->
    <form name="login-form" class="login-form" action="process/verification.php" method="post" style="margin-top: 13%;">

        <!--HEADER-->
        <div class="header">
            <!--            <h1>Login</h1>-->
            <!--            <span>Fill out the form below to login to my super awesome imaginary control panel.</span>-->
            <!--            <br/>-->
            <!--            <br/>-->
            <a id="logo"><img src="img/non.png" style="cursor: pointer;"></a>
        </div>
        <!--END HEADER-->

        <!--CONTENT-->
        <div class="content">
            <!--USERNAME--><input id="username" name="username" type="text" class="input username" placeholder="用户名" /><!--END USERNAME-->
            <!--PASSWORD--><input id="password" name="password" type="password" class="input password" placeholder="密码" /><!--END PASSWORD-->

        </div>
        <div style="text-align:right; font-size: 13px; margin-top: -12.5px; margin-bottom: 12.5px;">
            <a id="findback" style="color: #9C9C9C; cursor: pointer;">忘记密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
        <!--END CONTENT-->

        <!--FOOTER-->
        <div class="footer">

            <!--LOGIN BUTTON--><input type="submit" name="submit" value="登录" class="button" /><!--END LOGIN BUTTON-->
            <!--            <input type="submit" name="submit" value="Register" class="register" />-->
        </div>
        <!--END FOOTER-->

    </form>
    <!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->







<div id="wrapperx">

    <!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

    <!--LOGIN FORM-->
    <form name="login-form" class="login-form" action="process/adduser.php" method="post" style="margin-top: 8%;">

        <!--HEADER-->
        <div class="header">
            <!--            <h1>Login</h1>-->
            <!--            <span>Fill out the form below to login to my super awesome imaginary control panel.</span>-->
            <!--            <br/>-->
            <!--            <br/>-->
            <a id="logox"><img src="img/non.png" style="cursor: pointer;"></a>
        </div>
        <!--END HEADER-->

        <!--CONTENT-->
        <div class="content">
            <!--USERNAME--><input id="usernamex" name="username" type="text" class="input username" placeholder="用户名" /><!--END USERNAME-->
            <!--PASSWORD--><input id="passwordx" name="password" type="password" class="input password" placeholder="密码" /><!--END PASSWORD-->
            <!--PASSWORD--><input id="passwordxx" name="passwordx" type="password" class="input password" placeholder="确认密码" /><!--END PASSWORD-->
            <!--USERNAME--><input id="email" name="email" type="text" class="input password" placeholder="关联邮箱" /><!--END USERNAME-->
        </div>
        <!--END CONTENT-->

        <!--FOOTER-->
        <div class="footer">
            <!--LOGIN BUTTON--><input type="submit" name="submit" value="注册" class="button" /><!--END LOGIN BUTTON-->
            <!--            <input type="submit" name="submit" value="Register" class="register" />-->
        </div>
        <!--END FOOTER-->

    </form>
    <!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->









<div id="wrapperxx">

    <!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

    <!--LOGIN FORM-->
    <form name="login-form" class="login-form" action="process/findback_deal.php" method="post" style="margin-top: 13%;">

        <!--HEADER-->
        <div class="header">
            <!--            <h1>Login</h1>-->
            <!--            <span>Fill out the form below to login to my super awesome imaginary control panel.</span>-->
            <!--            <br/>-->
            <!--            <br/>-->
            <a id="logoxx"><img src="img/non.png" style="cursor: pointer;"></a>
        </div>
        <!--END HEADER-->

        <!--CONTENT-->
        <div class="content">
            <!--USERNAME--><input id="usernamexx" name="username" type="text" class="input username" placeholder="用户名" /><!--END USERNAME-->
            <!--USERNAME--><input id="emailx" name="email" type="text" class="input password" placeholder="关联邮箱" /><!--END USERNAME-->
        </div>
        <div style="text-align:right; font-size: 13px; color:#F3F3F3;">
            忘记密码
        </div>
        <!--END CONTENT-->

        <!--FOOTER-->
        <div class="footer">

            <!--LOGIN BUTTON--><input type="submit" name="submit" value="验证" class="button" /><!--END LOGIN BUTTON-->
            <!--            <input type="submit" name="submit" value="Register" class="register" />-->
        </div>
        <!--END FOOTER-->

    </form>
    <!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->
</body>
</html>