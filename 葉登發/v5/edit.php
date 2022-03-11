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
    <title>會員資料修改</title>

    <link rel="stylesheet" href="./assets/css/main.css" />
    <script src="https://kit.fontawesome.com/9b156b54f7.js" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/member.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./assets/js/jquery.twzipcode.min.js"></script>

    <script type="text/javascript">
        function check_data() {
            if (document.myForm.account.value.length == 0) {
                alert("「使用者帳號」一定要填寫哦...");
                return false;
            }
            if (document.myForm.account.value.length > 50) {
                alert("「使用者帳號」不可以超過 50 個字元哦...");
                return false;
            }
            if (document.myForm.name.value.length == 0) {
                alert("您一定要留下真實姓名哦！");
                return false;
            }
            if (document.myForm.sex.value.length == 0) {
                alert("您一定要留下性別哦！");
                return false;
            }
            myForm.submit();
        }

        function check_data2() {
            if (document.myFormImg.upload.value.length == 0) {
                alert("尚未選擇檔案哦...");
                return false;
            }
            myFormImg.submit();
        }
    </script>

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

                        <div class="mb-4">
                            <h4 class="title font-weight-600">會員資料修改</h4>
                        </div>

                        <div class='col-md-12'>

                            <form class="input" name="myFormImg" enctype="multipart/form-data" method="post" action="upimg.php">
                                <img style="margin-bottom: 5%;" src="<?php echo $row["img"] ?>" class="avatar"><br />
                                <input type="file" name="upload" class="btn btn-primary" style="margin-bottom: 5%;">

                                <input type="button" value="上傳頭像" onClick="check_data2()" class="btn btn-primary" style="margin-bottom: 5%;">
                            </form>


                            <form class="input" name="myForm" method="post" action="update.php">
                                <div class="container">
                                    <div class="row"
                                        style=" display: flex; justify-content: center; align-items: center;">

                                        <div class="col-6" style="padding-top: 0; margin-top: 50px;">
                                            <div class="col-md-12">姓名</div>
                                            <input style="margin-bottom: 5%;" class="form-control" type="text"
                                                value="<?php echo $row["name"] ?>" name="name">
                                        </div>
                                        <div class="col-6" style="padding-top: 0; margin-top: 50px;">
                                            <div class="col-md-12">帳號(信箱)</div>
                                            <input readonly style="margin-bottom: 5%;" class="form-control" type="text"
                                                value="<?php echo $row["account"] ?>" name="account">
                                        </div>

                                    </div>
                                    <div class="row"
                                        style=" display: flex; justify-content: center; align-items: center;">

                                        <div class="col-6" style="padding-top: 0; margin-top: 50px;">
                                            <div class="col-md-12">性別</div>
                                            <select style="margin-bottom: 5%;" class="form-control" name="sex">
                                                <option <?php  if ($row["sex"] == '男') echo "selected"; ?> value="男">男</option>
                                                <option <?php  if ($row["sex"] == '女') echo "selected"; ?> value="女">女</option>
                                            </select>
                                        </div>
                                        <div class="col-6" style="padding-top: 0; margin-top: 50px;">
                                            <div class="col-md-12">生日</div>
                                            <input style="margin-bottom: 5%;" class="form-control" type="date"
                                                value="<?php echo $row["birthday"] ?>" name="birthday">
                                        </div>
                                    </div>
                                </div>


                                <div class="container" style="padding-left: 0px; padding-right: 0px;">
                                    <div class="col-md-12">地區</div>
                                    <div class="form-row col-md-12"
                                        style="padding-left: 15px; padding-right: 15px; margin-left: 0px; margin-right: 0px;"
                                        id="zipcodeSelect"></div>

                                    <br>
                                    <div class="col-md-12">手機</div>
                                    <div class="form-row col-md-12"
                                        style="padding-left: 15px; padding-right: 15px; margin-left: 0px; margin-right: 0px;">
                                        <input style="margin-bottom: 5%;" class="form-control col-md-6" type="tel"
                                            value="<?php echo $row["cellphone"] ?>" name="cellphone">
                                        <select name="hide" style="margin-bottom: 5%;" class="form-control col-md-6">
                                            <option <?php  if ($row["hide"] == '隱藏') echo "selected"; ?> value="隱藏">隱藏</option>
                                            <option <?php  if ($row["hide"] == '公開') echo "selected"; ?> value="公開">公開</option>
                                        </select>
                                    </div>
                                </div>


                                <input type="button" value="送出資料" onClick="check_data()" class="btn btn-primary"
                                    style="margin-bottom: 5%;">

                                <script>
                                    $("#zipcodeSelect").twzipcode({
                                        countySel: "<?php echo $row["city"] ?>", // 城市預設值 
                                        districtSel: "<?php echo $row["town"] ?>", // 地區預設值
                                        zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
                                        css: [" city form-control col-6", "town col-6  form-control"], // 自訂 "城市"、"地區" class 名稱
                                        countyName: "city", // 自訂城市 select 標籤的 name 值
                                        districtName: "town" // 自訂地區 select 標籤的 name 值
                                    });
                                </script>
                            </form>
                        </div>
                    </div>
                    <br>


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