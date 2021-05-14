<?php
session_start();
$tag = $_GET['id'];
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
            require('./reutilization/up_1.php');
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
            width: 572px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #specialx {
            height: 330px;
            width: 572px;
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
            /*-webkit-appearance: none;*/
            appearance: none;
            background: url(img/select.png) no-repeat scroll right center transparent;
        }
        input:hover {
            background: #dfe9ec;
            color: #414848;
        }
        input:focus {
            background: #dfe9ec;
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
                    $("#top").css("background","#F1F2F3");
                }
            });
        });
        $(document).ready(function(){
            $("#td0").hover(function(){
                $("#td0").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td0").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td1").hover(function(){
                $("#td1").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td1").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td2").hover(function(){
                $("#td2").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td2").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td3").hover(function(){
                $("#td3").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td3").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td4").hover(function(){
                $("#td4").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td4").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td5").hover(function(){
                $("#td5").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td5").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td6").hover(function(){
                $("#td6").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td6").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td7").hover(function(){
                $("#td7").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td7").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td8").hover(function(){
                $("#td8").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td8").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td9").hover(function(){
                $("#td9").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td9").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td10").hover(function(){
                $("#td10").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td10").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td11").hover(function(){
                $("#td11").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td11").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td12").hover(function(){
                $("#td12").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td12").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td13").hover(function(){
                $("#td13").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td13").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td14").hover(function(){
                $("#td14").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td14").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td15").hover(function(){
                $("#td15").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td15").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td16").hover(function(){
                $("#td16").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td16").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td17").hover(function(){
                $("#td17").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td17").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td18").hover(function(){
                $("#td18").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td18").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td19").hover(function(){
                $("#td19").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td19").css("box-shadow","0px 0px 0px #888888");
            });
            $("#td20").hover(function(){
                $("#td20").css("box-shadow","0px 0px 15px black");
            }, function() {
                $("#td20").css("box-shadow","0px 0px 0px #888888");
            });
        });
//        $(function(){
//            $("#nav-mark-btn").hover(function(){
//                $("#mark-info").show();
//            },function(){
//                $("#mark-info").hide();
//            })
//        })
    </script>
    <!--    <link rel="stylesheet" href="dynamic/slider.css">-->
</head>
<body class="body">
<div class="body" style="background: white;">
<div id="top" style="background: #F1F2F3;">
    <a href="index.php">
        <img src="img/non.png" style="padding: 4px; margin-left: 20px;">
    </a>
    <div  id="search" style="margin: 0px; padding: 0px; width: auto;">
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
                    echo '<a id="signin"><span style="margin: 0px 20px 0px 0px; color: #459686; cursor: pointer;">登录
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
<div id="table" align="center" style="background: #F1F2F3;">
    <div style="width: 100%; height: 1px; background: white;">
        <br/>
    </div>
    <table style="padding: 3px 0px; margin-top: 2px;">
        <tr>
            <td>
                <a id="a" href="index.php">
                    <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;首页&nbsp;&nbsp;</span>
                </a>
            </td>
            <td>
                <?php
                    if ($tag=='tv') {
                        echo '
                            <a id="a" href="others.php?id=tv">
                            <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;剧集&nbsp;&nbsp;</span></strong>
                            </a>
                        ';
                    }
                    else {
                        echo '
                            <a id="a" href="others.php?id=tv">
                            <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;剧集&nbsp;&nbsp;</span>
                            </a>
                        ';
                    }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='movie') {
                    echo '
                            <a id="a" href="others.php?id=movie">
                            <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;电影&nbsp;&nbsp;</span></strong>
                            </a>
                        ';
                }
                else {
                    echo '
                            <a id="a" href="others.php?id=movie">
                            <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;电影&nbsp;&nbsp;</span>
                             </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='mv') {
                    echo '
                            <a id="a" href="others.php?id=mv">
                            <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;音乐&nbsp;&nbsp;</span></strong>
                            </a>
                        ';
                }
                else {
                    echo '
                            <a id="a" href="others.php?id=mv">
                            <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;音乐&nbsp;&nbsp;</span>
                            </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='cartoon') {
                    echo '
                            <a id="a" href="others.php?id=cartoon">
                            <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;动画&nbsp;&nbsp;</span></strong>
                            </a>
                        ';
                }
                else {
                    echo '
                            <a id="a" href="others.php?id=cartoon">
                            <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;动画&nbsp;&nbsp;</span>
                            </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='science') {
                    echo '
                            <a id="a" href="others.php?id=science">
                            <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;科技&nbsp;&nbsp;</span></strong>
                            </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=science">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;科技&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='game') {
                    echo '
                            <a id="a" href="others.php?id=game">
                            <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;游戏&nbsp;&nbsp;</span></strong>
                            </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=game">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;游戏&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='tvx') {
                    echo '
                        <a id="a" href="others.php?id=tvx">
                        <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;综艺&nbsp;&nbsp;</span></strong>
                        </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=tvx">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;综艺&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='moviex') {
                    echo '
                        <a id="a" href="others.php?id=moviex">
                        <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;新闻&nbsp;&nbsp;</span></strong>
                        </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=moviex">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;新闻&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>

            </td>
            <td>
                <?php
                if ($tag=='mvx') {
                    echo '
                        <a id="a" href="others.php?id=mvx">
                        <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;娱乐&nbsp;&nbsp;</span></strong>
                        </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=mvx">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;娱乐&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='cartoonx') {
                    echo '
                        <a id="a" href="others.php?id=cartoonx">
                        <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;财经&nbsp;&nbsp;</span></strong>
                        </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=cartoonx">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;财经&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='sciencex') {
                    echo '
                        <a id="a" href="others.php?id=sciencex">
                        <strong><span style="margin: 0px 30px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;体育&nbsp;&nbsp;</span></strong>
                        </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=sciencex">
                        <span style="margin: 0px 30px 0px 0px;">&nbsp;&nbsp;体育&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
            <td>
                <?php
                if ($tag=='gamex') {
                    echo '
                        <a id="a" href="others.php?id=gamex">
                        <strong><span style="margin: 0px 0px 0px 0px; color: #29A4F8; border-bottom: 2px solid #29A4F8; padding-bottom: 6px;">&nbsp;&nbsp;少儿&nbsp;&nbsp;</span></strong>
                        </a>
                        ';
                }
                else {
                    echo '
                        <a id="a" href="others.php?id=gamex">
                        <span style="margin: 0px 0px 0px 0px;">&nbsp;&nbsp;少儿&nbsp;&nbsp;</span>
                        </a>
                        ';
                }
                ?>
            </td>
        </tr>
    </table>
<!--    <div style="width: 100%; height: 1px; background: #F0F0F0;">-->
<!--        <br/>-->
<!--    </div>-->
</div>

<?php
@$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
$db->query("SET NAMES utf8");
if(mysqli_connect_errno()) {
    echo '<script type="text/javascript">alert(\'连接数据库失败！\');</script>';
}
?>
<div style="width: 1206px; height: 80px; margin: 20px auto;">
    <table>
        <tr>
            <td style="overflow: hidden; margin: 0px; padding: 0px; background-size:cover; position: relative;">
                <div class="hrefx" style="border: solid 1px #29A4F8; margin: 5px 0px 0px 5px; font-size: larger;
                    width: 35px; padding: 2px 5px; background: rgba(0,0,0,0.7); color: #29A4F8; position: absolute;
                    z-index: 90;">
                    <span>广告</span>
                </div>
                <div style="width: 1200px; z-index: 98;">
                    <ul id="slide">
                        <li><img id="img" src="img/4.jpg" /></li>
                        <li><img id="img" src="img/2.jpg" /></li>
                        <li><img id="img" src="img/6.jpg" /></li>
                        <li><img id="img" src="img/4.jpg" /></li>
                    </ul>
                    <script src="dynamic/bufferMovement.js"></script>
                    <script src="dynamic/slider.js"></script>
                </div>
            </td>
        </tr>
    </table>
</div>
<div style="margin: 0px auto 1px; width: 1200px; height: 38px; padding: 0px;">
    <div style="padding-top: 5px;">
        <div>
            <span style="margin: 0px 0px 0px 0px; font-size: 20px; color: #29A4F8">今日聚焦</span>
        </div>
        <div style="float: right; margin-top: -33px;">
            <img src="img/jrjj.png">
        </div>
        <div style="width: 80px; height: 5px; background: #084077; float: left;">
            <br/>
        </div>
        <div style="margin: 0px auto; width: 1200px; height: 5px; background: #29A4F8">
            <br/>
        </div>
    </div>
</div>
<?php
if ($tag=='tv' || $tag=='tvx') {
    $select_1="select title from video WHERE (tag='tv') ORDER BY id ASC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>4)
                break;
        }
    }
}if ($tag=='movie' || $tag=='moviex') {
    $select_1="select title from video WHERE (tag='movie') ORDER BY id ASC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>4)
                break;
        }
    }
}if ($tag=='mv' || $tag=='mvx') {
    $select_1="select title from video WHERE (tag='mv') ORDER BY id ASC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>4)
                break;
        }
    }
}if ($tag=='cartoon' || $tag=='cartoonx') {
    $select_1="select title from video WHERE (tag='cartoon') ORDER BY id ASC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>4)
                break;
        }
    }
}if ($tag=='science' || $tag=='sciencex') {
    $select_1="select title from video WHERE (tag='science') ORDER BY id ASC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>4)
                break;
        }
    }
}if ($tag=='game' || $tag=='gamex') {
    $select_1="select title from video WHERE (tag='game') ORDER BY id ASC";
    $result_1=$db->query($select_1);
    $count_1=$result_1->num_rows;
    $title_1=[];
    if($count_1 > 0) {
        $j_1=0;
        for($i=$count_1; $i>0; $i--) {
            $row_1=$result_1->fetch_assoc();
            $title_1[]=$row_1['title'];
            $j_1++;
            if($j_1>4)
                break;
        }
    }
}

?>
<?php
    echo '
    <div style="margin: 0px auto; width: 1240px; height: 380px;">
        <table cellspacing="20">
            <tr>
                <td colspan="2" rowspan="2" style="height: 340px; width: 590px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_1[0].'.png" valign="bottom" id="td0">
                    <div style="padding-bottom: 180px; padding-left: 50px;">
                        <img src="img/shit1.png">
                    </div>
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_1[0].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_1[0].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_1[1].'.png" valign="bottom" id="td1">
                    <div style="padding-bottom: 53px; padding-left: 0px;">
                        <img src="img/shit10.png">
                    </div>
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_1[1].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_1[1].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_1[2].'.png" valign="bottom" id="td2">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_1[2].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_1[2].'</span>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="img/gif4.gif" valign="bottom" id="td3">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_1[3].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_1[3].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_1[4].'.png" valign="bottom" id="td4">
                    <div style="padding-bottom: 53px; padding-left: 0px;">
                        <img src="img/shit11.png">
                    </div>
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_1[4].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_1[4].'</span>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    ';
?>
<div style="margin: 0px auto 2px; width: 1200px; height: 32px;">
    <div style="margin-top: -1px;">
        <div>
            <p style="margin: 0px 0px 0px 0px; font-size: 20px; color: #29A4F8">倾情推荐</p>
        </div>
        <div style="float: right; margin-top: -33px;">
            <img src="img/qqtj.png">
        </div>
        <div style="width: 80px; height: 5px; background: #084077; float: left;">
            <br/>
        </div>
        <div style="margin: 0px auto; width: 1200px; height: 5px; background: #29A4F8">
            <br/>
        </div>
    </div>
</div>
<?php
if ($tag=='tv' || $tag=='tvx') {
    $select_2="select title from video WHERE (tag='tv') ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count_2=$result_2->num_rows;
    $title_2=[];
    if($count_2 > 0) {
        $j_2=0;
        for($i=$count_2; $i>0; $i--) {
            $row_2=$result_2->fetch_assoc();
            $title_2[]=$row_2['title'];
            $j_2++;
            if($j_2>3)
                break;
        }
    }
}if ($tag=='movie' || $tag=='moviex') {
    $select_2="select title from video WHERE (tag='movie') ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count_2=$result_2->num_rows;
    $title_2=[];
    if($count_2 > 0) {
        $j_2=0;
        for($i=$count_2; $i>0; $i--) {
            $row_2=$result_2->fetch_assoc();
            $title_2[]=$row_2['title'];
            $j_2++;
            if($j_2>3)
                break;
        }
    }
}if ($tag=='mv' || $tag=='mvx') {
    $select_2="select title from video WHERE (tag='mv') ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count_2=$result_2->num_rows;
    $title_2=[];
    if($count_2 > 0) {
        $j_2=0;
        for($i=$count_2; $i>0; $i--) {
            $row_2=$result_2->fetch_assoc();
            $title_2[]=$row_2['title'];
            $j_2++;
            if($j_2>3)
                break;
        }
    }
}if ($tag=='cartoon' || $tag=='cartoonx') {
    $select_2="select title from video WHERE (tag='cartoon') ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count_2=$result_2->num_rows;
    $title_2=[];
    if($count_2 > 0) {
        $j_2=0;
        for($i=$count_2; $i>0; $i--) {
            $row_2=$result_2->fetch_assoc();
            $title_2[]=$row_2['title'];
            $j_2++;
            if($j_2>3)
                break;
        }
    }
}if ($tag=='science' || $tag=='sciencex') {
    $select_2="select title from video WHERE (tag='science') ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count_2=$result_2->num_rows;
    $title_2=[];
    if($count_2 > 0) {
        $j_2=0;
        for($i=$count_2; $i>0; $i--) {
            $row_2=$result_2->fetch_assoc();
            $title_2[]=$row_2['title'];
            $j_2++;
            if($j_2>3)
                break;
        }
    }
}if ($tag=='game' || $tag=='gamex') {
    $select_2="select title from video WHERE (tag='game') ORDER BY id DESC";
    $result_2=$db->query($select_2);
    $count_2=$result_2->num_rows;
    $title_2=[];
    if($count_2 > 0) {
        $j_2=0;
        for($i=$count_2; $i>0; $i--) {
            $row_2=$result_2->fetch_assoc();
            $title_2[]=$row_2['title'];
            $j_2++;
            if($j_2>3)
                break;
        }
    }
}
?>
<?php
echo '
    <div style="margin: 0px auto; width: 1240px; height: 200px;">
        <table cellspacing="20">
            <tr>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_2[0].'.png" valign="bottom" id="td5">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_2[0].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_2[0].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_2[1].'.png" valign="bottom" id="td6">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_2[1].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_2[1].'</span>
                        </a>
                    </div>
                </td>         
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_2[2].'.png" valign="bottom" id="td7">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_2[2].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_2[2].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_2[3].'.png" valign="bottom" id="td8">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_2[3].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_2[3].'</span>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    ';
?>
<div style="margin: 0px auto 2px; width: 1200px; height: 32px; padding: 0px;">
    <div style="margin-top: -1px;">
        <div>
            <p style="margin: 0px 0px 0px 0px; font-size: 20px; color: #29A4F8">播放排行</p>
        </div>
        <div style="float: right; margin-top: -33px;">
            <img src="img/bfph.png">
        </div>
        <div style="width: 80px; height: 5px; background: #084077; float: left;">
            <br/>
        </div>
        <div style="padding: 0px; margin: 0px auto; width: 1200px; height: 5px; background: #29A4F8">
            <br/>
        </div>
    </div>
</div>
<?php
if ($tag=='tv' || $tag=='tvx') {
    $select_3="select title from video WHERE (tag='movie') ORDER BY watch DESC";
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
}if ($tag=='movie' || $tag=='moviex') {
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
}if ($tag=='mv' || $tag=='mvx') {
    $select_3="select title from video WHERE (tag='cartoon') ORDER BY watch DESC";
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
}if ($tag=='cartoon' || $tag=='cartoonx') {
    $select_3="select title from video WHERE (tag='science') ORDER BY watch DESC";
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
}if ($tag=='science' || $tag=='sciencex') {
    $select_3="select title from video WHERE (tag='game') ORDER BY watch DESC";
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
}if ($tag=='game' || $tag=='gamex') {
    $select_3="select title from video WHERE (tag='tv') ORDER BY watch DESC";
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
<?php
echo '
    <div style="margin: 0px auto; width: 1240px; height: 380px;">
        <table cellspacing="20">
            <tr>
                <td style="height: 340px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_3[0].'.png" valign="bottom" id="td9">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_3[0].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_3[0].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 340px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_3[1].'.png" valign="bottom" id="td10">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_3[1].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_3[1].'</span>
                        </a>
                    </div>
                </td>         
                <td style="height: 340px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_3[2].'.png" valign="bottom" id="td11">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_3[2].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_3[2].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 340px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_3[3].'.png" valign="bottom" id="td12">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_3[3].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_3[3].'</span>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    ';
?>
<div style="width: 1200px; height: 80px; margin: -1px auto 20px;">
    <table>
        <tr>
            <td colspan="4" rowspan="1" style="width: 1200px; height: 80px; background-size:cover;"
                background="img/4.jpg" valign="top">
                <div class="hrefx" style="border: solid 1px #29A4F8; margin: 5px 0px 0px 5px; font-size: larger;
                width: 35px; padding: 2px 5px; background: rgba(0,0,0,0.7); color: #29A4F8">
                    <span>广告</span>
                </div>
            </td>
        </tr>
    </table>
</div>
<div style="margin: 0px auto 1px; width: 1200px; height: 38px; padding: 0px;">
    <div style="padding-top: 5px;">
        <div>
            <p style="margin: 0px 0px 0px 0px; font-size: 20px; color: #29A4F8">更多精彩</p>
        </div>
        <div style="float: right; margin-top: -33px;">
            <img src="img/more.png">
        </div>
        <div style="width: 80px; height: 5px; background: #084077; float: left;">
            <br/>
        </div>
        <div style="padding: 0px; margin: 0px auto; width: 1200px; height: 5px; background: #29A4F8">
            <br/>
        </div>
    </div>
</div>
<?php
if ($tag=='tv' || $tag=='tvx') {
    $select_4="select title from video WHERE (tag='game') ORDER BY title DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>7)
                break;
        }
    }
}if ($tag=='movie' || $tag=='moviex') {
    $select_4="select title from video WHERE (tag='tv') ORDER BY title DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>7)
                break;
        }
    }
}if ($tag=='mv' || $tag=='mvx') {
    $select_4="select title from video WHERE (tag='movie') ORDER BY title DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>7)
                break;
        }
    }
}if ($tag=='cartoon' || $tag=='cartoonx') {
    $select_4="select title from video WHERE (tag='mv') ORDER BY title DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>7)
                break;
        }
    }
}if ($tag=='science' || $tag=='sciencex') {
    $select_4="select title from video WHERE (tag='cartoon') ORDER BY title DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>7)
                break;
        }
    }
}if ($tag=='game' || $tag=='gamex') {
    $select_4="select title from video WHERE (tag='science') ORDER BY title DESC";
    $result_4=$db->query($select_4);
    $count_4=$result_4->num_rows;
    $title_4=[];
    if($count_4 > 0) {
        $j_4=0;
        for($i=$count_4; $i>0; $i--) {
            $row_4=$result_4->fetch_assoc();
            $title_4[]=$row_4['title'];
            $j_4++;
            if($j_4>7)
                break;
        }
    }
}

?>
<?php
echo '
    <div style="margin: 0px auto; width: 1240px; height: 380px;">
        <table cellspacing="20">
            <tr>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[0].'.png" valign="bottom" id="td13">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[0].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[0].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[1].'.png" valign="bottom" id="td14">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[1].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[1].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[2].'.png" valign="bottom" id="td15">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[2].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[2].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[3].'.png" valign="bottom" id="td16">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[3].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[3].'</span>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[4].'.png" valign="bottom" id="td17">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[4].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[4].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[5].'.png" valign="bottom" id="td18">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[5].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[5].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[6].'.png" valign="bottom" id="td19">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[6].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[6].'</span>
                        </a>
                    </div>
                </td>
                <td style="height: 160px; width: 285px; overflow: hidden; margin: 0px;
                padding: 0px; background-size:cover;" background="temp/'.$title_4[7].'.png" valign="bottom" id="td20">
                    <div class="titlex">
                        <a class="hrefx" href="play.php?id='.$title_4[7].'" target=\'_blank\'>
                            <span>&nbsp;&nbsp;&nbsp;'.$title_4[7].'</span>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    ';
?>
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