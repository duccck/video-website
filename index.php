<?php
    session_start();
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
            require('./reutilization/up_1x.php');
        ?>
        #a:link {
            color: black;
        }
        #a:visited {
            color: black;
        }
        #a:hover {
            color: #29A4F8;
        }
        #select {
            border: 1px solid #F0F0F0;
        }
        ul{
            position: relative;
            width: 400%;
            margin: 0;
            padding: 0;
        }
        li{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #img{
            position: relative;
            display: block;
            width: 25%;
            float: left;
            margin: 0;
            padding: 0;
        }
        #special {
            height: 330px;
            width: 570px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #specialx {
            height: 330px;
            width: 570px;
            /*overflow: hidden;*/
            margin: 0px 20px 0px 0px;
            padding-right: 40px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #othersxx {
            height: 155px;
            width: 250px;
            /*overflow: hidden;*/
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #others {
            height: 155px;
            width: 276px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #othersx {
            height: 330px;
            width: 276px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #othersxxx {
            height: 505px;
            width: 276px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        select {
            -moz-appearance: none;
            appearance: none;
            background: url(img/select.png) no-repeat scroll right center transparent;
        }
        input:hover {
            /*background: #dfe9ec;*/
            color: #414848;
        }
        input:focus {
            /*background: #dfe9ec;*/
            color: #414848;

            /*box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
            /*-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
            /*-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
        }
        input {
            font-weight: 400;
            font-size: 14px;
            color: #9d9e9e;
            text-shadow: 1px 1px 0 rgba(256,256,256,1.0);

            background: #fff;
            border: 1px solid #fff;
            border-radius: 5px;

            /*box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);*/
            /*-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);*/
            /*-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);*/
        }
        /*******************
LOGIN FORM STYLESHEET
by: Amit Jakhu
www.amitjakhu.com
*******************/

        /*******************
        FONTS
        *******************/

        /*@import url(http://fonts.googleapis.com/css?family=Bree+Serif);*/

        /*******************
        SELECTION STYLING
        *******************/

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
        /*.login-form .footer .register:hover {*/
        /*color: #3f9db8;*/
        /*}*/

        /*.login-form .footer .register:focus {*/
        /*position: relative;*/
        /*bottom: -1px;*/
        /*}*/
        #line {
            padding: 0px;
            margin: 0px auto;
            width: 1150px;
            height: 1px;
            background: #F0F0F0;
        }
    </style>
    <script type="text/javascript">
        <?php
        require('./reutilization/up_2.php');
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
//        window.onscroll = function(){
//            var t1 = document.documentElement.scrollTop || document.body.scrollTop;
//            if( t1 >=82 ) {
//                $("#top").css("background","rgba(255,255,255,0.7)");
//            }
//            else {
//                $("#top").css("background","rgba(255,255,255,1)");
//            }
//        };
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
                if ( $(this).scrollTop() < 100) {
                    $("#content_0").css("box-shadow","0px 0px 20px #888888");
                    $("#content_0").css("background","white");
                }

                if ( $(this).scrollTop() > 150){
                    $("#content_0").css("box-shadow","0px 0px 0px #888888");
                    $("#content_0").css("background","#F1F2F3");
                }


                if ( $(this).scrollTop() > 250 && $(this).scrollTop() < 600 ){
                    $("#content_1").css("box-shadow","0px 0px 20px #888888");
                    $("#content_1").css("background","white");
                } else {
                    $("#content_1").css("box-shadow","0px 0px 0px #888888");
                    $("#content_1").css("background","#F1F2F3");
                }

                if ( $(this).scrollTop() > 680 && $(this).scrollTop() < 1000 ){
                    $("#content_3").css("box-shadow","0px 0px 20px #888888");
                    $("#content_3").css("background","white");
                } else {
                    $("#content_3").css("box-shadow","0px 0px 0px #888888");
                    $("#content_3").css("background","#F1F2F3");
                }

                if ( $(this).scrollTop() > 1100 && $(this).scrollTop() < 1550 ){
                    $("#content_3x").css("box-shadow","0px 0px 20px #888888");
                    $("#content_3x").css("background","white");
                } else {
                    $("#content_3x").css("box-shadow","0px 0px 0px #888888");
                    $("#content_3x").css("background","#F1F2F3");
                }
                if ( $(this).scrollTop() > 1650){
                    $("#content_2").css("box-shadow","0px 0px 20px #888888");
                    $("#content_2").css("background","white");
                } else {
                    $("#content_2").css("box-shadow","0px 0px 0px #888888");
                    $("#content_2").css("background","#F1F2F3");
                }
            });
        });
    </script>

    <!--    <link href="dynamic/login.css" rel="stylesheet" type="text/css" />-->

    <!--    <link rel="stylesheet" href="dynamic/slider.css">-->
</head>
<body class="body">
<div class="body">
    <div id="top">
        <a href="index.php">
            <img src="img/non.png" style="padding: 4px; margin-left: 20px;">
        </a>
        <div id="search" style="margin: 0px; padding: 0px; width: auto;">
            <form action="search.php" method="post">
                <input style="height: 40px; width: 300px; margin: 5px 0px 5px 0px;
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
                            echo '<span style="margin: 0px 20px 0px 0px; color: #459686;">'.$_SESSION['username'].'
                              </span>';
                        }
                        else {
                            echo '<span style="margin: 0px 20px 0px 0px; color: #459686;">'.$_SESSION['username'].'
                              </span>';
                        }
                    }
                    else {
                        echo '<a id="signin"><span style="margin: 0px 20px 0px 0px; color: #459686; cursor: pointer">登录
                              </span></a>';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if(isset($_SESSION['role'])) {
                        if($_SESSION['role'] == 'admini' || $_SESSION['role'] == 'consumer') {
                            echo '<a href="process/signout.php"><span style="color: #459686;">退出</span></a> ';
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
    <div id="table" align="center">
        <div style="width: 100%; height: 1px; background: #F0F0F0;">
            <br/>
        </div>
        <table style="padding-top: 3px; margin-top: 2px;">
            <tr>
                <td>
                    <a id="a" href="index.php"><strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8;
                    padding-bottom: 6px;">&nbsp;&nbsp;首页&nbsp;&nbsp;</span></strong></a>
                </td>
                <td>
                    <a id="a" href="others.php?id=tv">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;剧集&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=movie">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;电影&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=mv">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;音乐&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=cartoon">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;动画&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=science">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;科技&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=game">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;游戏&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=tvx">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;综艺&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=moviex">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;新闻&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=mvx">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;娱乐&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=cartoonx">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;财经&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=sciencex">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;体育&nbsp;&nbsp;</span>
                    </a>
                </td>
                <td>
                    <a id="a" href="others.php?id=gamex">
                        <span style="margin: 0px 0px 0px 0px;">&nbsp;&nbsp;少儿&nbsp;&nbsp;</span>
                    </a>
                </td>
            </tr>
        </table>
<!--        <div style="width: 100%; height: 1px; background: #F0F0F0;">-->
<!--            <br/>-->
<!--        </div>-->
    </div>
    <?php
    @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
    $db->query("SET NAMES utf8");
    if(mysqli_connect_errno()) {
        echo '<script type="text/javascript">alert(\'连接数据库失败！\');</script>';
    }

    $select_1="select title from cover ORDER BY id DESC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>6)
                break;
        }
    }
    ?>
<!--    <script>-->
<!--        window.onscroll = function(){-->
<!--            var t2 = document.documentElement.scrollTop || document.body.scrollTop;-->
<!--            if( t2 >=160 ) {-->
<!--                $("#content_0").css("box-shadow","0px 0px 0px #888888");-->
<!--            }-->
<!--            else {-->
<!--                $("#content_0").css("box-shadow","0px 0px 20px #888888");-->
<!--            }-->
<!--        }-->
<!--    </script>-->
    <div id="content_0">
        <table cellspacing="20">
            <tr>
                <td colspan="2" rowspan="2" id="special">
                    <ul id="slide">
                        <li><a target="_blank" href="play.php?id=以人民的名义">
                                <img id="img" src="img/1.png" /></a></li>
                        <li><a target="_blank" href="play.php?id=以人民的名义">
                                <img id="img" src="img/2.png" /></a></li>
                        <li><a target="_blank" href="play.php?id=以人民的名义">
                                <img id="img" src="img/3.png" /></a></li>
                        <li><a target="_blank" href="play.php?id=以人民的名义">
                                <img id="img" src="img/1.png" /></a></li>
                    </ul>
                    <script src="dynamic/bufferMovement.js"></script>
                    <script src="dynamic/slider.js"></script>
                </td>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_1[0].'.png" valign="bottom">
                            <div style="padding-bottom: 87px;">
                                <img src="img/shit4.png">
                            </div>
                            <div class="titlex">
                                <a class="hrefx" href="play.php?id='.$title_1[0].'" target=\'_blank\'>
                                    <span>&nbsp;&nbsp;&nbsp;'.$title_1[0].'</span>
                                </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="img/halo1.jpg" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_1[1].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;Halo Wars 2 宣传片</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
            <tr>
                <?php
                echo ' 
                        <td id="others" background="img/lol.jpg" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_1[2].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;英雄联盟比赛集锦</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td colspan="1" rowspan="2" id="othersx" background="img/gif2.gif" valign="bottom">
                            <div style="padding-bottom: 240px;">
                                <img src="img/shit6.png">
                            </div>
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_1[3].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;奈良焰火大会</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
            <tr>
                <?php
                echo ' 
                        <td id="others" background="img/halo2.png" valign="bottom">
                            <div style="padding-bottom: 65px;">
                                <img src="img/shit8.png">
                            </div>
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_1[4].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_1[4].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="img/gif1.gif" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_1[5].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;我的饭呢？</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="img/twd.jpg" valign="bottom">
                            <div style="padding-bottom: 65px;">
                                <img src="img/shit5.png">
                            </div>
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_1[6].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;行尸走肉：第三季</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
        </table>
    </div>
    <?php
    if (isset($_SESSION['username'])) {
        $username=$_SESSION['username'];
        $select_2="select tag from login WHERE (username='$username')";
        $result_2=$db->query($select_2);
        $row_2=$result_2->fetch_assoc();
        $tag_2=$row_2['tag'];

        if ($tag_2!='null') {
            $select_3="select title from video WHERE (tag='$tag_2') ORDER BY watch DESC";
            $result_3=$db->query($select_3);
            $count_3=$result_3->num_rows;
            $title_3=[];

            if($count_3 > 0) {
                $j_3=0;
                for($i=$count_3; $i>0; $i--) {
                    $row_3=$result_3->fetch_assoc();
                    $title_3[]=$row_3['title'];
                    $j_3++;
                    if($j_3>3)
                        break;
                }
            }
        }
        else {
            $select_3="select title from video WHERE (tag='mv') ORDER BY watch DESC";
            $result_3=$db->query($select_3);
            $count_3=$result_3->num_rows;
            $title_3=[];

            if($count_3 > 0) {
                $j_3=0;
                for($i=$count_3; $i>0; $i--) {
                    $row_3=$result_3->fetch_assoc();
                    $title_3[]=$row_3['title'];
                    $j_3++;
                    if($j_3>3)
                        break;
                }
            }
        }
    } else {
        $select_3="select title from video WHERE (tag='mv') ORDER BY watch DESC";
        $result_3=$db->query($select_3);
        $count_3=$result_3->num_rows;
        $title_3=[];

        if($count_3 > 0) {
            $j_3=0;
            for($i=$count_3; $i>0; $i--) {
                $row_3=$result_3->fetch_assoc();
                $title_3[]=$row_3['title'];
                $j_3++;
                if($j_3>3)
                    break;
            }
        }
    }
    ?>
    <div id="content_1">
        <div style="padding-top: 20px;">
            <div>
                <img src="img/person.png" style="float: left; margin: -5px 0px 0px 20px;">
                <p style="margin: 0px 0px 0px 60px; font-size: 20px;">のん懂你&nbsp;&nbsp;&nbsp;<span style="font-size: 13px; color: #9C9C9C">
                    <?php
                        if (isset($_SESSION['role']))
                            echo '只为合你口味。';
                        else
                            echo '猜的不准吗？<a id="signinx"><span style="color: #459686; cursor: pointer;">登录</span></a>&nbsp;后再看看吧。';
                    ?>
                    </span>
                </p>
            </div>
            <div id="line">
                <br/>
            </div>
        </div>
        <table cellspacing="20">
            <tr>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_3[0].'.png" valign="bottom">
                            <div class="title">
                            <a class="href" href="play.php?id='.$title_3[0].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_3[0].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_3[1].'.png" valign="bottom">
                            <div class="title">
                            <a class="href" href="play.php?id='.$title_3[1].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_3[1].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_3[2].'.png" valign="bottom">
                            <div class="title">
                            <a class="href" href="play.php?id='.$title_3[2].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_3[2].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_3[3].'.png" valign="bottom">
                            <div class="title">
                            <a class="href" href="play.php?id='.$title_3[3].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_3[3].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
            <!--        <tr>-->
            <!--            <td colspan="4" rowspan="1" style="width: 1060px; height: 77.5px; background-size:cover;"-->
            <!--                background="img/3.jpg" valign="top">-->
            <!--                <div class="hrefx" style="border: solid 1px #29A4F8; margin: 5px 0px 0px 5px; font-size: larger;-->
            <!--                width: 35px; padding: 2px 5px; background: rgba(0,0,0,0.7); color: #29A4F8">-->
            <!--                    <span>广告</span>-->
            <!--                </div>-->
            <!--            </td>-->
            <!--        </tr>-->
        </table>
    </div>
    <?php
    $select_4="select title from cover WHERE (tag='movie') ORDER BY id DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>3)
                break;
        }
    }
    ?>
    <div id="content_3">
        <div style="padding-top: 20px;">
            <div>
                <img src="img/movie.png" style="float: left; margin: -5px 0px 0px 20px;">
                <p style="margin: 0px 0px 0px 65px; font-size: 20px;">热门电影&nbsp;&nbsp;&nbsp;
                    <span style="font-size: 13px; color: #9C9C9C">尽享大片时刻。</span>
                    <a id="a" href="others.php?id=movie" style="font-size: 14px;">
                        <span style="margin-left: 838px; color: #29A4F8;">更多</span>
                    </a>
                </p>
            </div>
            <div id="line">
                <br/>
            </div>
        </div>
        <table cellspacing="20">
            <tr>
                <?php
                echo ' 
                        <td id="othersx" background="img/movie2.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_4[0].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_4[0].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="othersx" background="img/movie1.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_4[1].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_4[1].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="othersx" background="img/md.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_4[2].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_4[2].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="othersx" background="img/am.png" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_4[3].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_4[3].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
            <tr>
                <td colspan="4" rowspan="1" style="width: 1060px; height: 77.5px; background-size:cover; z-index: 90;"
                    background="img/1.jpg" valign="top">
                    <div class="hrefx" style="border: solid 1px #29A4F8; margin: 5px 0px 0px 5px; font-size: larger;
                width: 35px; padding: 2px 5px; background: rgba(0,0,0,0.7); color: #29A4F8">
                        <span>广告</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php
    $select_5="select title from cover WHERE (tag='tv') ORDER BY id DESC";
    $result_5=$db->query($select_5);
    $count_5=$result_5->num_rows;
    $title_5=[];
    if($count_5 > 0) {
        $j_5=0;
        for($i=$count_5; $i>0; $i--) {
            $row_5=$result_5->fetch_assoc();
            $title_5[]=$row_5['title'];
            $j_5++;
            if($j_5>3)
                break;
        }
    }
    ?>
    <div id="content_3x">
        <div style="padding-top: 20px;">
            <div>
                <img src="img/tv.png" style="float: left; margin: -5px 0px 0px 20px;">
                <p style="margin: 0px 0px 0px 65px; font-size: 20px;">最新剧集&nbsp;&nbsp;&nbsp;
                    <span style="font-size: 13px; color: #9C9C9C">热播好剧等你来看。</span>
                    <a id="a" href="others.php?id=tv" style="font-size: 14px;">
                        <span style="margin-left: 812px; color: #29A4F8;">更多</span>
                    </a>
                </p>
            </div>
            <div id="line">
                <br/>
            </div>
        </div>
        <table cellspacing="20">
            <tr>
                <?php
                echo ' 
                        <td id="othersx" background="img/tv1.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_5[0].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_5[0].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="othersx" background="img/tv2.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_5[1].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_5[1].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="othersx" background="img/tv3.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_5[2].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_5[2].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="othersx" background="img/tv4.jpg" valign="bottom">
                            <div class="titlexx">
                            <a class="hrefx" href="play.php?id='.$title_5[3].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_5[3].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
            <tr>
                <td colspan="4" rowspan="1" style="width: 1060px; height: 77.5px; background-size:cover; z-index: 90;"
                    background="img/5.jpg" valign="top">
                    <div class="hrefx" style="border: solid 1px #29A4F8; margin: 5px 0px 0px 5px; font-size: larger;
                width: 35px; padding: 2px 5px; background: rgba(0,0,0,0.7); color: #29A4F8">
                        <span>广告</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php
    $select_6="select title from video WHERE (vip='1') ORDER BY id DESC";
    $result_6=$db->query($select_6);
    $count_6=$result_6->num_rows;
    $title_6=[];
    if($count_6 > 0) {
        $j_6=0;
        for($i=$count_6; $i>0; $i--) {
            $row_6=$result_6->fetch_assoc();
            $title_6[]=$row_6['title'];
            $j_6++;
            if($j_6>7)
                break;
        }
    }
    ?>
    <div id="content_2">
        <div style="padding-top: 20px;">
            <div>
                <img src="img/vip.png" style="float: left; margin: -5px 0px 0px 20px;">
                <p style="margin: 0px 0px 0px 60px; font-size: 20px;">会员专区&nbsp;&nbsp;&nbsp;
                    <span style="font-size: 13px; color: #9C9C9C">尊享专属视频。</span>
                </p>
            </div>
            <div id="line">
                <br/>
            </div>
        </div>
        <table cellspacing="20">
            <tr>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[0].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[0].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[0].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[1].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[1].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[1].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[2].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[2].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[2].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[3].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[3].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[3].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
            <tr>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[4].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[4].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[4].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[5].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[5].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[5].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[6].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[6].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[6].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
                <?php
                echo ' 
                        <td id="others" background="temp/'.$title_6[7].'.png" valign="bottom">
                            <div class="titlex">
                            <a class="hrefx" href="play.php?id='.$title_6[7].'" target=\'_blank\'>
                                <span>&nbsp;&nbsp;&nbsp;'.$title_6[7].'</span>
                            </a>
                            </div>
                         </td>
                    ';
                ?>
            </tr>
        </table>
    </div>
    <?php
    if (!isset($_SESSION['role'])) {
        echo '
        <script>
            setTimeout((function() {
                $(document).ready(function() {
                    $("#index_1").animate({left:\'100%\'}, "slow", function() {
                        setTimeout((function () {
                            $("#index_2").fadeIn("slow");
                        }), 300);
                    });
                });
            }), 2000);
            setTimeout((function() {
                $("#index_1").fadeOut("slow");
                $("#index_2").fadeOut("slow");
            }), 6000);
        </script>
    ';
    }
?>
    <div id="index_1" style="width: 100%; margin-left: -100%; position: fixed; top: 0px; left: 0px; text-align: center;
background: rgba(0,0,0,0.5); padding-top: 50px;">
        <div style="width: 500px; margin: 0 auto;">
            <a href="play.php?id=以人民的名义" target=\'_blank\'>
                <img src="img/index_1.png">
            </a>
            <!--            <img id="close" src="img/close.png">-->
        </div>
    </div>
    <div id="index_2" style="width: 100%; position: fixed; top: 527.5px; left: 0px; text-align: center;
background: rgba(0,0,0,0.5); padding-bottom: 100px; display: none;">
        <a href="play.php?id=以人民的名义" target=\'_blank\'>
            <img src="img/index_2.png">
        </a>
    </div>
    <?php
    require('./reutilization/up_3.php');
    require('./reutilization/bottom.php');
    ?>
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
            <a id="findback" style="color: #9C9C9C; cursor: pointer;"">忘记密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
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