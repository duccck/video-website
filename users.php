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
            require('./reutilization/up_1x.php');
        ?>
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
        input, textarea {
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
    <script>
        $(document).ready(function(){
            $("#users").hover(function(){
                $("#users").css("box-shadow","0px 0px 15px #888888");
            }, function() {
                $("#users").css("box-shadow","0px 0px 0px #888888");
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
                    <strong><span style="margin: 0px 20px 0px 0px; color: #29A4F8;">用户相关</span></strong>
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
<div id="users" style="background:white; height:auto !important; min-height:583px; width: 1100px; margin: 70px auto 6px;
overflow:auto; border-radius: 5px;">
    <form action="process/comment_manage.php" method="post">
        <div style="float: left; width: 320px; margin: 20px 35px 0px 35px; padding-bottom: 0px; height:auto !important; min-height:538px;">
            <p style="color: #29A4F8;"><strong>违规评论</strong></p>
            <div style="float: right; margin-top: -36px; margin-right: 50px;">
                <input id="allx" type="button" value="全选" />
            </div>
            <div style="float: right; margin-top: -36px;">
                <input id="deletex" type="submit" value="删除" />
            </div>
            <div style="height: 1px; background: #29A4F8">
                <br/>
            </div>
            <ul>
            <?php
                @$db=new mysqli('127.0.0.1', 'root', '0209', 'Titan');
                $db->query("SET NAMES utf8");
                if(mysqli_connect_errno()) {
                    echo '<script type="text/javascript">alert(\'连接数据库失败。\');</script>';
    //                echo '<script>history.back();</script>';
                }
                $comment='我';
//                $commentxx='我日';
//                $commentxxx='你妈';
                $select = "SELECT DISTINCT content FROM comment WHERE content LIKE '%" . $comment . "%' ";
                $result=$db->query($select);
                $count=$result->num_rows;
                if ($count>0) {
                    for ($i=$count; $i >0; $i--) {
                        $row = $result->fetch_assoc();
                        $content = $row['content'];
                        echo '
                            <li style="font-size: 18px;">
                                <label for="checkboxx'.$i.'">
                                    <input id="checkboxx'.$i.'" type="checkbox" name="delete[]" value="'.$content.'"/><br/>'.$content.'
                                </label>
                            </li>
                            <script>
                                $(document).ready(function(){
                                    $("#allx").click(function () {
                                        if ($("#checkboxx'.$i.'").attr("checked") != "checked") {
                                            $("#checkboxx'.$i.'").attr("checked", "checked");
                                        } else {
                                            $("#checkboxx'.$i.'").removeAttr("checked");
                                        }
                                    });
                                });
                            </script>
                        ';
                    }
                }

            ?>
            </ul>
        </div>
    </form>
    <form action="process/user_manage.php" method="post">
        <div style="float: left; width: 320px; margin: 20px 35px 0px 0px; padding-bottom: 0px; height:auto !important; min-height:538px;">
            <p style="color: #29A4F8;"><strong>违规用户</strong></p>
            <div style="float: right; margin-top: -36px; margin-right: 50px;">
                <input id="allxx" type="button" value="全选" />
            </div>
            <div style="float: right; margin-top: -36px;">
                <input id="deletex" type="submit" value="删除" />
            </div>
            <div style="height: 1px; background: #29A4F8">
                <br/>
            </div>
            <ul>
                <?php

                $selectx = "SELECT DISTINCT username FROM comment WHERE content LIKE '%" . $comment . "%'";
                $resultx=$db->query($selectx);
                $countx=$resultx->num_rows;
                if ($countx>0) {
                    for ($i=$countx; $i >0; $i--) {
                        $rowx = $resultx->fetch_assoc();
                        $username = $rowx['username'];
                        echo '
                            <li style="font-size: 20px; margin-bottom: 5px;">
                                <label for="checkboxxx'.$i.'">
                                    <input id="checkboxxx'.$i.'" type="checkbox" name="delete[]" value="'.$username.'"/><br/>'.$username.'
                                </label>
                            </li>
                            <script>
                                $(document).ready(function(){
                                    $("#allxx").click(function () {
                                        if ($("#checkboxxx'.$i.'").attr("checked") != "checked") {
                                            $("#checkboxxx'.$i.'").attr("checked", "checked");
                                        } else {
                                            $("#checkboxxx'.$i.'").removeAttr("checked");
                                        }
                                    });
                                });
                            </script>
                        ';
                    }
                }

                ?>
            </ul>
        </div>
    </form>
    <form action="process/vip_manage.php" method="post">
        <div style="float: left; width: 320px; margin: 20px 35px 0px 0px; padding-bottom: 0px; height:auto !important; min-height:538px;">
            <p style="color: #29A4F8;"><strong>会员管理</strong></p>
            <div style="float: right; margin-top: -36px; margin-right: 50px;">
                <input id="allxxx" type="button" value="全选" />
            </div>
            <div style="float: right; margin-top: -36px;">
                <input id="deletex" type="submit" value="删除" />
            </div>
            <div style="height: 1px; background: #29A4F8">
                <br/>
            </div>
            <ul>
                <?php

                $selectxx = "SELECT username FROM login WHERE (vip='1') ORDER BY id ASC ";
                $resultxx=$db->query($selectxx);
                $countxx=$resultxx->num_rows;
                if ($countxx>0) {
                    for ($i=$countxx; $i >0; $i--) {
                        $rowxx = $resultxx->fetch_assoc();
                        $username = $rowxx['username'];
                        echo '
                                <li style="font-size: 20px; margin-bottom: 5px;">
                                    <label for="checkboxxxx'.$i.'">
                                        <input id="checkboxxxx'.$i.'" type="checkbox" name="delete[]" value="'.$username.'"/><br/>'.$username.'
                                    </label>
                                </li>
                                <script>
                                $(document).ready(function(){
                                    $("#allxxx").click(function () {
                                        if ($("#checkboxxxx'.$i.'").attr("checked") != "checked") {
                                            $("#checkboxxxx'.$i.'").attr("checked", "checked");
                                        } else {
                                            $("#checkboxxxx'.$i.'").removeAttr("checked");
                                        }
                                    });
                                });
                                </script>
                            ';
                    }
                }

                ?>
            </ul>
        </div>
    </form>
</div>
<?php
require('./reutilization/up_3.php');
require('./reutilization/bottom.php');
?>
</body>
</html>
