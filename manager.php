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
@$tag = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require('./reutilization/head.php');
    ?>
    <style type="text/css">
        <?
            require ('./reutilization/style.php');
            require('./reutilization/up_1.php');
        ?>
        a {
            text-decoration: none;
        }
        #a:link {
            color: black;
        }
        #a:visited {
            color: black;
        }
        #a:hover {
            color: #29A4F8;
        }
        .body {
            margin: 0px auto;
            padding: 0px;
            background-color: #F1F2F3;
        }
        #top {
            background: rgba(255,255,255,1);
            width: 100%;
            height: 50px;
            z-index: 99;
            position: fixed;
            right: 0px;
            top: 0px;
        }
        .father {
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
        }
        .login {
            background-color: #F1F1F1;
            box-shadow: 0px 20px 20px #888888;
            margin: -275px 0px 0px -250px;
            width: 500px;
            height: 550px;
            border-radius: 10px;
        }
        #menu {
            float: right;
            margin: 13px 28px;
            /*border: solid red 1px;*/
        }
        #button {
            padding: 2px;
            margin-bottom: 15px;
            margin-top: 15px;
            /*width: 44px;*/
            background-color: #D0D0D0;
            border: 1px solid #D0D0D0;
        }
        /*::-webkit-input-placeholder {*/
        /*color: #459686;*/
        /*}*/
        /*input, textarea {*/
        /*font-weight: 400;*/
        /*font-size: 14px;*/
        /*color: #9d9e9e;*/
        /*text-shadow: 1px 1px 0 rgba(256,256,256,1.0);*/

        /*background: #fff;*/
        /*border: 1px solid #fff;*/
        /*border-radius: 5px;*/

        /*box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);*/
        /*-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);*/
        /*-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);*/
        /*}*/
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
        }
        #deletex {
            height: 25px;
            width: 60px;
            display: none;
        }
        select {
            -moz-appearance: none;
            appearance: none;
            background: url(img/select.png) no-repeat scroll right center transparent;
        }
        #select {
            border: 1px solid #F0F0F0;
        }

    </style>
    <script type="text/javascript">
        <?php
        require('./reutilization/up_2.php');
        ?>
        $(document).ready(function(){
            $("#selectx").click(function(){
                $("#deletex").toggle("normal");
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
        $(document).ready(function(){
            $("#result").hover(function(){
                $("#result").css("box-shadow","0px 0px 15px #888888");
            }, function() {
                $("#result").css("box-shadow","0px 0px 0px #888888");
            });
        });
    </script>
</head>
<body class="body" style="background: #F6F4EC;">
<div id="top">
<!--    <a href="index.php">-->
        <img src="img/non.png" style="padding: 4px; margin-left: 20px;">
<!--    </a>-->
    <div  id="search" style="margin: 0px; padding: 0px; width: auto;">
        <form action="search_manage.php" method="post">
            <input style="height: 40px; width: 300px; margin: 6px 0px 4px 0px;
                   border: solid 1px #29A4F8; background-color: transparent; border-radius: 5px; font-size: 13px;"
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
    <table id="menu">
        <tr>
            <td>
                <a href="manager.php">
                    <strong> <span style="margin: 0px 20px 0px 0px; color: #29A4F8;">视频管理</span></strong>
                </a>
            </td>
            <td>
                <a href="users.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686;">用户相关</span>
                </a>
            </td>
            <td>
                <a href="upload.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686">视频上传</span></strong>
                </a>
            </td>
            <td>
                <a href="cover.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686;">封面上传</span>
                </a>
            </td>
            <td>
                <a href="editor.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686;">信息更新</span>
                </a>
            </td>

            <td>
                <a href="process/signout.php">
                    <span style="color: #459686;">退出</span>
                </a>
            </td>
        </tr>
    </table>
</div>
<form action="process/video_delete.php" method="post">
    <div id="table" align="center">
        <div style="width: 100%; height: 1px; background: #F0F0F0;">
            <br/>
        </div>
        <table style="padding: 3px 0px;">
            <tr>
                <td>
                    <a id="a" href="manager.php"><strong><span style="margin: 0px 40px 0px 0px;color: #29A4F8;">所有</span></strong></a>
                </td>
                <td>
                    <?php
                    if ($tag=='tv') {
                        echo '
                            <a id="a" href="anothers.php?id=tv">
                            <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">剧集</span>
                            </a>
                        ';
                    }
                    else {
                        echo '
                            <a id="a" href="anothers.php?id=tv">
                            <span style="margin: 0px 40px 0px 0px;">剧集</span>
                            </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='movie') {
                        echo '
                            <a id="a" href="anothers.php?id=movie">
                            <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">电影</span>
                            </a>
                        ';
                    }
                    else {
                        echo '
                            <a id="a" href="anothers.php?id=movie">
                            <span style="margin: 0px 40px 0px 0px;">电影</span>
                             </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='mv') {
                        echo '
                            <a id="a" href="anothers.php?id=mv">
                            <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">音乐</span>
                            </a>
                        ';
                    }
                    else {
                        echo '
                            <a id="a" href="anothers.php?id=mv">
                            <span style="margin: 0px 40px 0px 0px;">音乐</span>
                            </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='cartoon') {
                        echo '
                            <a id="a" href="anothers.php?id=cartoon">
                            <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">动画</span>
                            </a>
                        ';
                    }
                    else {
                        echo '
                            <a id="a" href="anothers.php?id=cartoon">
                            <span style="margin: 0px 40px 0px 0px;">动画</span>
                            </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='science') {
                        echo '
                            <a id="a" href="anothers.php?id=science">
                            span style="margin: 0px 40px 0px 0px; color: #29A4F8;">科技</span>
                            </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=science">
                        <span style="margin: 0px 40px 0px 0px;">科技</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='game') {
                        echo '
                            <a id="a" href="anothers.php?id=game">
                            <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">游戏</span>
                            </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=game">
                        <span style="margin: 0px 40px 0px 0px;">游戏</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='tvx') {
                        echo '
                        <a id="a" href="anothers.php?id=tvx">
                        <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">综艺</span>
                        </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=tvx">
                        <span style="margin: 0px 40px 0px 0px;">综艺</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='moviex') {
                        echo '
                        <a id="a" href="anothers.php?id=moviex">
                        <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">新闻</span>
                        </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=moviex">
                        <span style="margin: 0px 40px 0px 0px;">新闻</span>
                        </a>
                        ';
                    }
                    ?>

                </td>
                <td>
                    <?php
                    if ($tag=='mvx') {
                        echo '
                        <a id="a" href="anothers.php?id=mvx">
                        <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">娱乐</span>
                        </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=mvx">
                        <span style="margin: 0px 40px 0px 0px;">娱乐</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='cartoonx') {
                        echo '
                        <a id="a" href="anothers.php?id=cartoonx">
                        <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">财经</span>
                        </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=cartoonx">
                        <span style="margin: 0px 40px 0px 0px;">财经</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='sciencex') {
                        echo '
                        <a id="a" href="anothers.php?id=sciencex">
                        <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">体育</span>
                        </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=sciencex">
                        <span style="margin: 0px 40px 0px 0px;">体育</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($tag=='gamex') {
                        echo '
                        <a id="a" href="anothers.php?id=gamex">
                        <span style="margin: 0px 40px 0px 0px; color: #29A4F8;">少儿</span>
                        </a>
                        ';
                    }
                    else {
                        echo '
                        <a id="a" href="anothers.php?id=gamex">
                        <span style="margin: 0px 40px 0px 0px;">少儿</span>
                        </a>
                        ';
                    }
                    ?>
                </td>
            </tr>
        </table>
        <div style="float: right; margin-top: -29px; margin-right: 20px;">
            <input class="input" id="deletex" type="submit" value="删除" />
            <input class="input" id="selectx" type="button" value="选择" />
        </div>
        <div style="width: 100%; height: 1px; background: #F0F0F0;">
            <br/>
        </div>
    </div>

    <div id="result" style="background:white; height:auto !important; min-height:530px; width: 1200px; margin: 20px auto 8px;
overflow:auto; padding-bottom: 15px; border-radius: 5px;">
        <div style="width: 1160px; margin: 0 auto;">
            <?php
            @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
            $db->query("SET NAMES utf8");
            if(mysqli_connect_errno()) {
                echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
                echo '<script>history.back();</script>';
            }
//            if ($tag=='tv' || $tag=='tvx') {
//                $tagx='tv';
//
//            }if ($tag=='movie' || $tag=='moviex') {
//                $tagx='movie';
//
//            }if ($tag=='mv' || $tag=='mvx') {
//                $tagx='mv';
//
//            }if ($tag=='cartoon' || $tag=='cartoonx') {
//                $tagx='cartoon';
//
//            }if ($tag=='science' || $tag=='sciencex') {
//                $tagx='science';
//
//            }if ($tag=='game' || $tag=='gamex') {
//                $tagx='game';
//
//            }
//            //            $i;
            $selectx = "SELECT title FROM cover ORDER BY id DESC";
            $resultx = $db->query($selectx);
            $countx = $resultx->num_rows;
            $title;
            for ($k=$countx; $k>0; $k--) {
                $rowx = $resultx->fetch_assoc();
                $title=$rowx['title'];
//                echo $title.'\n';
                echo '
                    <div id="video'.$k.'" style="margin: 18px 4.6px 0px;">
                        <label for="checkbox'.$k.'">
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
                            <input id="checkbox'.$k.'" type="checkbox" name="delete[]" value="'.$title.'"/>
                        </div>
                    </div>
                ';
                echo '
                            <script>
                                $(document).ready(function(){
                                    $("#selectx").click(function(){
                                        $("#checkbox'.$k.'").toggle();
                                    });
                                });
                            </script>
                            ';
                echo '
                            <style type="text/css">
                                #checkbox'.$k.' {
                                    height: 20px;
                                    width: 20px;
                                    display: none;
                                }
                            </style>
                            ';
                echo '
                <style type="text/css">
                    #video'.$k.' {
                        float: left;
                        /*margin: 0px auto;*/
                        /*padding: 0px;*/
                    }
                </style>
                ';
                echo '
                <script>
                    $(document).ready(function(){
                        $("#fade'.$k.'").click(function(){
                            $("#video'.$k.'").toggle();
                        });
                    });
                </script>
                ';
//                        $j++;
//                        if($j>5)
//                            break;
            }
            ?>
        </div>
    </div>
    <?php
    require('./reutilization/up_3.php');
    require('./reutilization/bottom.php');
    ?>
</form>
</body>
</html>
