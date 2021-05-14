<?php
session_start();
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'admini') {
        echo '<script>alert(\'请使用管理员账号登录。\');
        if(history.length > 0) history.back(); else window.location="index.php";</Script>';
    }
}
else {
    echo '<script>alert(\'请使用管理员账号登录。\');
          window.location="index.php";</Script>';
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
            require('./reutilization/up_1.php');
        ?>
        #video {
            float: left;
            /*margin: 0px auto;*/
            /*padding: 0px;*/
        }
        #a:link {
            color: black;
        }
        #a:visited {
            color: black;
        }
        #a:hover {
            color: #459686;
        }
        #select {
            /*border: 0;*/
            border: 1px solid #F0F0F0;
        }
        select {
            -moz-appearance: none;
            appearance: none;
            /*background: white;*/
            box-shadow: 0px 2px 2px #888888;
            /*background: url(img/select.png) no-repeat scroll right center transparent;*/
        }
        #input:hover {
            /*background: #dfe9ec;*/
            color: #414848;
        }
        #input:focus {
            /*background: #dfe9ec;*/
            color: #414848;

            /*box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
            /*-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
            /*-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);*/
        }
        #input {
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
        .input:hover {
            background: #dfe9ec;
            color: #29A4F8;
        }
        .input:focus {
            background: #dfe9ec;
            color: #29A4F8;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }
        .input {
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
        #others {
            height: 155px;
            width: 276px;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            background-size:cover;
            /*border: solid 1px red;*/
        }
        #selectx {
            height: 25px;
            width: 60px;
            display: none;
        }
        #deletex {
            height: 25px;
            width: 60px;
            display: none;
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
        window.onscroll = function() {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t > 0) {
                $("#top").css("background", "rgba(255,255,255,0.7)");
            }
            else {
                $("#top").css("background", "rgba(255,255,255,1)");
            }
        }
        $(document).ready(function(){
            $("#selectx").click(function(){
                $("#deletex").toggle("normal");
            });
        });
        $(document).ready(function(){
            $("#result").hover(function(){
                $("#result").css("box-shadow","0px 0px 15px #888888");
                $("#searchx").css("box-shadow","0px 0px 0px #888888");
                $("#select").css("box-shadow","0px 0px 0px #888888");
            }, function() {
                $("#result").css("box-shadow","0px 0px 0px #888888");
                $("#searchx").css("box-shadow","0px 2px 2px #888888");
                $("#select").css("box-shadow","0px 2px 2px #888888");
            });
        });
    </script>
</head>
<body class="body" style="background: #F6F4EC;">
    <div id="top">
        <a href="manager.php"><img src="img/non.png" style="padding: 4px; margin-left: 20px; <!-- border: 1px red solid; -->"></a>
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
                        echo '<a id="signin"><span style="margin: 0px 20px 0px 0px; color: #459686;">登录</span></a>';
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
                        echo '<a id="signup"><span style="color: #459686;">注册</span></a>';
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin: 70px auto 0px; width: auto;">
        <form action="search_manage.php" method="post" style="text-align: center;">
            <img src="img/search.png" style="margin-bottom: -12px;">
            <input id="searchx" style="height: 45px; width: 370px; margin: 0px 0px 0px 5px; font-size: 13px;
               border: solid 1px #F0F0F0; border-radius: 5px; box-shadow: 0px 2px 2px #888888;" type="search" name="search"
                   placeholder="&nbsp;&nbsp;&nbsp;搜索..." />
            <select id="select" name="tag" style="height: 45px; width: 66px; font-size: small; border-radius: 5px; color: black;">
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

    <form action="process/video_delete.php" method="post">
    <div id="result" style="background:white; height:auto !important; min-height:505px; width: 1200px; margin: 20px auto 8px;
border-radius: 5px; overflow:auto; position: relative; padding-bottom: 11px;">
        <div style="padding-top: 20px;">
            <?php
            echo '
                        <span style="margin: 0px 0px 0px 26px; font-size: 25px;">搜索结果：'.@$_POST['search'].'</span>
                    ';
            ?>
            <div style="float: right; margin-top: 3px; margin-right: 26px;">
                <input class="input" id="deletex" type="submit" value="删除" />
                <input class="input" id="selectx" type="button" value="选择" />
            </div>
            <div style="padding: 0px; margin: 0px auto; width: 1148px; height: 1px; background: #F0F0F0">
                <br/>
            </div>
        </div>
        <div style="margin: 0px auto; width: 1160px;">
            <?php
            @$search=$_POST['search'];
            @$tag=$_POST['tag'];

            if(!$search) {
//            echo '<script type="text/javascript">alert(\'You did not enter anything !\');</script>';
//            echo '<script>window.location="index.php";</script>';
                echo '
                <div style="position: relative; top: 50%; left: 50%; width: 500px; height: 300px;">
                    <img src="img/null.jpg" style="margin-left: -250px; margin-top: 67px;">
                </div>
            ';
            }
            else {
                @$db = new mysqli('127.0.0.1', 'root', '0209', 'Titan');
                $db->query("SET NAMES utf8");
                if (mysqli_connect_errno()) {
                    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
//                    echo '<script>history.back();</script>';
                }

                if ($tag=='all') {
                    $selectx = "SELECT title FROM video WHERE title LIKE '%" . $search . "%' ORDER BY id DESC";
                    $resultx = $db->query($selectx);
                    $countx = $resultx->num_rows;
                    $title;

                    if ($countx>0) {

                        echo '
                                <script>
                                    $(document).ready(function(){
                                        $("#selectx").show();
                                    });
                                </script>
                            ';

                        for ($k = $countx; $k > 0; $k--) {
                            $rowx = $resultx->fetch_assoc();
                            $title = $rowx['title'];
        //                echo $title.'\n';
                            echo '
                            <div id="video' . $k . '" style="margin: 10px 5px;">
                                <label for="checkbox' . $k . '">
                                    <table>
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
                                    <input id="checkbox' . $k . '" type="checkbox" name="delete[]" value="' . $title . '"/>
                                </div>
                            </div>
                        ';
                            echo '
                                    <script>
                                        $(document).ready(function(){
                                            $("#selectx").click(function(){
                                                $("#checkbox' . $k . '").toggle();
                                            });
                                        });
                                    </script>
                                    ';
                            echo '
                                    <style type="text/css">
                                        #checkbox' . $k . ' {
                                            height: 20px;
                                            width: 20px;
                                            display: none;
                                        }
                                    </style>
                                    ';
                            echo '
                        <style type="text/css">
                            #video' . $k . ' {
                                float: left;
                                /*margin: 0px auto;*/
                                /*padding: 0px;*/
                            }
                        </style>
                        ';
        //                        $j++;
        //                        if($j>5)
        //                            break;
                        }
                    } else {
//                        echo 'null';
                        echo '
                            <div style="position: relative; top: 50%; left: 50%; width: 500px; height: 300px;">
                                <img src="img/null.jpg" style="margin-left: -250px; margin-top: 67px;">
                            </div>
                        ';
                    }

                } else {
                    $selectx = "SELECT title FROM video WHERE (tag='$tag') AND title LIKE '%" . $search . "%'";
                    $resultx = $db->query($selectx);
                    $countx = $resultx->num_rows;
                    $title;

                    if ($countx>0) {

                        echo '
                            <script>
                                $(document).ready(function(){
                                    $("#selectx").show();
                                });
                            </script>
                        ';

                        for ($k = $countx; $k > 0; $k--) {
                            $rowx = $resultx->fetch_assoc();
                            $title = $rowx['title'];
                            //                echo $title.'\n';
                            echo '
                            <div id="video' . $k . '" style="margin: 20px 3px 0px;">
                                <label for="checkbox' . $k . '">
                                    <table>
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
                                    <input id="checkbox' . $k . '" type="checkbox" name="delete[]" value="' . $title . '"/>
                                </div>
                            </div>
                        ';
                            echo '
                                    <script>
                                        $(document).ready(function(){
                                            $("#selectx").click(function(){
                                                $("#checkbox' . $k . '").toggle();
                                            });
                                        });
                                    </script>
                                    ';
                            echo '
                                    <style type="text/css">
                                        #checkbox' . $k . ' {
                                            height: 20px;
                                            width: 20px;
                                            display: none;
                                        }
                                    </style>
                                    ';
                            echo '
                        <style type="text/css">
                            #video' . $k . ' {
                                float: left;
                                /*margin: 0px auto;*/
                                /*padding: 0px;*/
                            }
                        </style>
                        ';
                            //                        $j++;
                            //                        if($j>5)
                            //                            break;
                        }
                    } else {
                        echo '
                            <div style="position: relative; top: 50%; left: 50%; width: 500px; height: 300px;">
                                <img src="img/null.jpg" style="margin-left: -250px; margin-top: 67px;">
                            </div>
                        ';
                        echo '
                                <script>
                                    $(document).ready(function(){
                                        $("#selectx").hide();
                                    });
                                </script>
                            ';
                    }
                }
            }
            ?>
        </div>
    </div>
    </form>
    <?php
    require('./reutilization/up_3.php');
    require('./reutilization/bottom.php');
    ?>
</body>
</html>