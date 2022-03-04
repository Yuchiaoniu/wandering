<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE 
  $passed = $_COOKIE{"passed"};
	
  //如果 cookie 中的 passed 變數不等於 TRUE
  //表示尚未登入網站，將使用者導向登入
  if ($passed != "TRUE")
  {
    header("location:login.html");
    exit();
  }
	
  //如果 cookie 中的 passed 變數等於 TRUE
  //表示已經登入網站，取得使用者資料	
  else
  {
    require_once("dbtools.inc.php");
		
    $memberID = $_COOKIE{"memberID"};
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
    $sql = "SELECT * FROM users Where memberID = $memberID";
    $result = execute_sql($link, "wandering", $sql);
		
    $row = mysqli_fetch_assoc($result);  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>會員中心</title>

    <link rel="stylesheet" href="./assets/css/main.css" />
    <script src="https://kit.fontawesome.com/9b156b54f7.js" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/member.css">

</head>

<body>

    <div id="page-wrapper">

        <!-- 匯入NAVBAR  -->
        <div id="navbar"></div>

        <!-- Main -->
        <div id="main">

            <div class="container">
                <div class="row main-row" id="member-row">
                    <div class=" col-8 col-12-medium" id="member-int">
                        <div class="row">
                            <div class="col-3 col-12-medium">
                                <img src="<?php echo $row{"img"} ?>" class="avatar">
                            </div>
                            <div class="col-9 col-12-medium">
                                <ul class="list-unstyled">
                                    <li class="name"><?php echo $row{"name"} ?></li>
                                    <li style="font-size: 18px;">會員ID: <?php echo $row{"memberID"} ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="title font-weight-600">通報案件</h4>
                        </div>

                        <!-- card -->
                        <div class="member-case">
                            <div class="card-list">
                                <a href="/rescue_manager.html" class="card-a">
                                    <div class="card-box">
                                        <div class="number">
                                            3
                                        </div>
                                        <div class="title">
                                            <span class="sub-title">救援</span>
                                            <span>案件數</span>
                                        </div>
                                        <div class="more">
                                            <!-- <span class="txt">查看清單</span> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-list">
                                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-list">

                                <a href="/adopt_manager.html" class="card-a">
                                    <div class="card-box">
                                        <div class="number">
                                            1
                                        </div>
                                        <div class="title">
                                            <span class="sub-title">送養</span>
                                            <span>案件數</span>
                                        </div>
                                        <div class="more">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-list">
                                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-list">
                                <a href="/mypet_manager.html" class="card-a">
                                    <div class="card-box">
                                        <div class="number">
                                            2
                                        </div>
                                        <div class="title">
                                            <span class="sub-title">領養</span>
                                            <span>案件數</span>
                                        </div>
                                        <div class="more">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-list">
                                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="card-list">

                                <a href="/stray_manager.html" class="card-a">
                                    <div class="card-box">
                                        <div class="number">
                                            1
                                        </div>
                                        <div class="title">
                                            <span class="sub-title">遺失</span>
                                            <span>案件數</span>
                                        </div>
                                        <div class="more">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-list">
                                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!-- card -->

                        <br>
                        <div class="member-content">
                            <div class="title-w-dot-left green mb-4">
                                <h4 class="title font-weight-600">最新公告與通知</h4>
                            </div>
                            <article class="article-box">
                                <p>歡迎回到浪跡天涯！！</p>
                                <p>非常感謝您的加入，<br>
                                    希望各位會員都能夠一起參與網站上的通報案件，無論是救援、送/認養、協尋，<br>
                                    一起發揮力量，讓更多需要救援的浪浪度過難關、無家可歸的浪浪找到溫暖的家、迷路在外的毛孩快點回家。
                                </p>
                                <p>&nbsp;</p>
                            </article>

                        </div>
                    </div>

                    <!-- menu -->
                    <div class="col-4 col-12-medium" id="menu-int">
                        <div id="memberMenu">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 匯入Footer  -->
        <div id="footer">
        </div>

    </div>

    <script>
        $(document).ready(function () {
            $("#navbar").load("myscript/navbar.php");//以ID找DOM，更改裡面的html
            $("#footer").load("myscript/footer.html");//以ID找DOM，更改裡面的html
            $("#memberMenu").load("myscript/memberMenu.php");//以ID找DOM，更改裡面的html
        });
    </script>

</body>

</html>
<?php
    //釋放資源及關閉資料連接
    mysqli_free_result($result);
    mysqli_close($link);
  }
?>