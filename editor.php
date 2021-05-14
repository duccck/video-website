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
        a {
            text-decoration: none;
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
            /*box-shadow: 0px 20px 20px #888888;*/
            margin: -250px 0px 0px -250px;
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
        input, textarea {
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
        textarea:hover {
            background: #dfe9ec;
            color: #29A4F8;
        }
        textarea:focus {
            background: #dfe9ec;
            color: #29A4F8;

            box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".login").hover(function(){
                $(".login").css("box-shadow","0px 0px 15px #888888");
            }, function() {
                $(".login").css("box-shadow","0px 0px 0px #888888");
            });
        });
    </script>
</head>
<body class="body" style="background: #F6F4EC;">
<div id="top">
<!--    <a href="index.php">-->
        <img src="img/non.png" style="padding: 4px; margin-left: 20px;">
<!--    </a>-->
    <table id="menu">
        <tr>
            <td>
                <a href="manager.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686;">视频管理</span>
                </a>
            </td>
            <td>
                <a href="users.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686;">用户相关</span>
                </a>
            </td>
            <td>
                <a href="upload.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686">视频上传</span>
                </a>
            </td>
            <td>
                <a href="cover.php">
                    <span style="margin: 0px 20px 0px 0px; color: #459686;">封面上传</span>
                </a>
            </td>
            <td>
                <a href="editor.php">
                    <strong><span style="margin: 0px 20px 0px 0px; color: #29A4F8;">信息更新</span></strong>
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
<div>
<div class="father">
    <div class="login">
        <div>
            <br/>
            <div style="margin: 10px;">
                <!--                    <img src="img/video.png">-->
                <span style="font-size: 32px; color: #29A4F8">视频更新</span>
            </div>
            <form action="process/editor.php" method="post" enctype="multipart/form-data">
                <div>
                    <img src="img/title.png" style="float: left; margin: 5px 0px 0px 5px;">
                    <input style="height: 40px; width: 400px; margin-left: -40px;" type="text" name="title" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;视频标题"/>
                </div>
                <br/>
                <div>
                    <img src="img/tag.png" style="float: left; margin: 6px 0px 0px 5px;">
                    <input style="height: 40px; width: 400px; margin-left: -39px;" type="text" name="tag"
                           placeholder="&nbsp;&nbsp;&nbsp;&nbsp;视频类型" />
                </div>
                <br/>
                <div>
                    <img src="img/limit.png" style="float: left; margin: 5px 0px 0px 5px;">
                    <input style="height: 40px; width: 400px; margin-left: -39px;" type="text" name="vip" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;观看权限"/>
                </div>
                <br/>
                <div>
                    <img src="img/infox.png" style="float: left; margin: 5px 0px 0px 5px;">
                    <textarea style="height: 120px; width: 400px; margin-left: -39px; font-size: larger;" name="imformation" placeholder="&nbsp;视频简介"></textarea>
                </div>
                <br/>
                <div style="margin-top: 20px; height: 131px; background: #D4DEDF; border-radius: 0px 0px 10px 10px;">
<!--                <input style="margin-top: 15px;" type="file" name="file"/>-->
                <input style="margin-top: 50px; height: 26px;" type="submit" value="更新"/>
                </div>
<!--                <button id="button" style="margin-top: 15px;" type="submit">Update</button>-->
            </form>
        </div>
    </div>
</div>
</div>
<?php
//require('./reutilization/up_3.php');
//require('./reutilization/bottom.php');
?>
</body>
</html>
