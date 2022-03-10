<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE 
  $passed = $_COOKIE["passed"];
	
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
		
    $memberID = $_COOKIE["memberID"];
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得users資料
    $sql = "SELECT * FROM users Where memberID = $memberID";
    $result = execute_sql($link, "wandering", $sql);
    $row = mysqli_fetch_assoc($result);  

    //執行 SELECT 陳述式取得rescue資料
    $sql2 = "SELECT * FROM rescue Where memberID = $memberID order BY id desc";
    $result2 = execute_sql($link, "wandering", $sql2); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>動物送養管理</title>

    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://kit.fontawesome.com/9b156b54f7.js" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/feed.css">
    <link rel="stylesheet" type="text/css" href="assets/css/member.css">
    
</head>

<body>

    <div id="page-wrapper">

        <!-- 匯入NAVBAR  -->
        <div id="navbar"></div>

        <!-- Main -->
        <div id="main">

            <div class="container">
                <div id="catt">
                    <h4 class="font-weight-600">流浪救援管理</h4> 
                </div>
                <div class="row main-row" id="member-row">
                    <div class=" col-8 col-12-medium" id="member-int" style="padding-left: 0px;">
                        <div class="row" style="margin-left: 0px;">
                            <div class="col-5">
                                <img src="<?php echo $row["img"] ?>"  class="avatar"  id="photo" style="float: right;">
                            
                            </div>
                       
                            <div id="cat"  class="col-6" style="padding-left: 0px; padding-top: 45px; margin-left: 10px;">
                                <h4 class="font-weight-600">流浪救援管理</h4> 
                             </div>
                             
                        </div>

                        <?php
                            while ($row2 = mysqli_fetch_object($result2)) { 
                        ?>

                        <div class="card" id="dog" style="margin-left: 10%;">
                            <div class="card-body">
                                <a href="rescue_showDetail.php?id=<?PHP echo 	$row2->id?>">
                                    <h5 class="card-title" id="word"><?php echo    $row2->title ?></h5>
                                </a>   
                                <h6 class="card-subtitle mb-2 text-muted" id="day">新增日期：<?php echo    $row2->date ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted" id="kind">類別：流浪救援</h6>
                              
                            </div>
                          </div>
                        <br>

                        <?php
                            };
                        ?>

                        查無其他資料

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