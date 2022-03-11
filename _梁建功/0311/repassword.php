<?php
$code = substr($_SERVER['QUERY_STRING'], 5);
$pass = substr($_SERVER['QUERY_STRING'], 5, 32);
$id = substr($_SERVER['QUERY_STRING'], 37);

// echo $code;
// echo $pass;
// echo $id;

setcookie("pass", $pass);
setcookie("id", $id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員忘記密碼</title>

    <link rel="stylesheet" href="./assets/css/main.css" />
    <script src="https://kit.fontawesome.com/9b156b54f7.js" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">

    <script type="text/javascript">
        function isEmail(strEmail) {
            if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/) != -1)
                return true;
            else
                alert("電子信箱格式錯誤");
                document.myForm.account.value = "";
        }

        function check_data() {
            if (document.myForm.password.value.length == 0) {
                alert("「重設密碼」一定要填寫哦...");
                return false;
            }
            if (document.myForm.re_password.value.length == 0) {
                alert("「確認新密碼」欄位忘了填哦...");
                return false;
            }
            if (document.myForm.password.value != document.myForm.re_password.value) {
                alert("「確認新密碼」欄位與「重設密碼」欄位一定要相同...");
                return false;
            }
            myForm.submit();
        }
    </script>
    
</head>

<body>

    <div id="page-wrapper">

        <!-- 匯入NAVBAR  -->
        <div id="navbar">
        </div>

        <!-- login -->
        <div id="main">
            <div class="loginbox">
                <img src="./images/indexlogo.jpg" class="avatar">
                <h1>忘記密碼</h1>
                <p>請輸入新密碼</p>
                <form method="post" name="myForm" action="password.php">
                    <div>
                        <p>
                            <i class="fa fa-envelope"></i>
                            重設密碼:
                            <input type="password" name="password" onblur=isPassword(this.value) placeholder="請輸入新密碼" required>
                        </p>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-envelope"></i>
                            確認新密碼:
                            <input type="password" name="re_password" placeholder="請在輸入一次新密碼" required>
                        </p>
                    </div> 
                    
                    <input type="button" value="確認" onClick="check_data()">
                    <a href="login.html" style="font-size: large;">會員登入</a>
                </form>
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
        });
    </script>

</body>

</html>