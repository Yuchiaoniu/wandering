<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>浪跡天涯</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />

    <script src="assets/js/jquery.min.js"></script>

</head>

<body>


    <div id="page-wrapper">

        <!-- 匯入NAVBAR  -->
        <div id="navbar"></div>
        <script>
            $(document).ready(function() {
                $("#navbar").load("myscript/navbar.php"); //以ID找DOM，更改裡面的html
            });
        </script>
        <!-- 匯入NAVBAR  END -->






        <!-- Main -->
        <div id="main">
            <div class="container">
                <div class="row main-row">

                    <!-- 點進後的救援詳細資料 -->
                    <div class="col-9 col-12-medium">

                        <?php
                        require_once("dbtools.inc.php");
                        //取得要顯示之記錄
                        $id = $_GET["id"];
                        //建立資料連接
                        $link = create_connection();
                        //執行SQL查詢
                        $sql = "SELECT * FROM rescue WHERE id = $id";
                        $result = execute_sql($link, "wandering", $sql);
                        ?>

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <h2> <?php echo $row['title'] ?> </h2>
                            <ul class="big-image-list">
                                <li>
                                    <img src="<?php echo $row['img'] ?>" class="left" style="height: 50%; width:50%;float: left; margin: 10px;">

                                    <h2>
                                    <br><br><br><br><br><br>
                                        救援案件編號：<?php echo $row['id'] ?> <br><br>
                                        建立日期： <?php echo  $row['date'] ?><br><br>
                                    </h2>
                                    動物類別：<span class="label label-info"> <?php echo $row['type'] ?> </span> <br><br>
                                    動物數量： <?php echo $row['amount'] ?> <br><br>
                                    縣市鄉鎮區：<?php echo $row['city'] ?><?php echo $row['town'] ?> <br><br>
                                    救援需求：<?php echo $row['need'] ?><br><br>
                                    通報人可負擔事項：<?php echo $row['responsibility'] ?><br>
                                </li>
                            </ul>
                            </section>
                            <hr>
                            <!-- //// 上半部END -->

                            <!-- //// 下列詳細資料 -->
                            <div>
                                <div class='panel-heading'>
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> 詳細資料 </a>
                                    </h4>
                                </div>

                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body"><?php echo $row['detail'] ?> </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <!-- //  救援原因 -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour"> 救援原因</a>
                                    </h4>
                                </div>

                                <div id="collapsefour" class="panel-collapse collapse">
                                    <div class="panel-body"><?php echo $row['reason'] ?> </div>
                                </div>
                            </div>
                        <?php } ?>

                        <br><br>

                        <div id="fb-root"></div>

                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v13.0" nonce="Xzl1gX6Y"></script>

                        <div class="fb-comments" data-href="http://127.0.0.1:5500/rescue_Detail_1.html" data-width="" data-numposts="10"></div>



                    </div>
                    <!-- 點進後的救援詳細資料  END-->

                    <div class="col-3 col-12-medium">
                        <!-- 下半部右側相關連結 -->
                        <div id="rightspace"></div>

                    </div>
                </div>
            </div>
        </div>

        <!-- 匯入Footer  -->
        <div id="footer">
        </div>

    </div>

    <script>
        /// 摺疊套件
        $(function() {
            $('#collapsefour').collapse('toggle')
        });

        $(function() {
            $('#collapseThree').collapse('toggle')
        });

        $(document).ready(function() {
            $("#navbar").load("myscript/navbar.html"); //以ID找DOM，更改裡面的html
            $("#research").load("myscript/research.html"); //以ID找DOM，更改裡面的html
            $("#rightspace").load("myscript/rightspace.html"); //以ID找DOM，更改裡面的html    右側連結
            $("#footer").load("myscript/footer.html"); //以ID找DOM，更改裡面的html
        });
    </script>



</body>

</html>