<?php
  //抓取 cookie 中的 pass, id 變數
  $memberID = $_COOKIE["id"];
	
  require_once("dbtools.inc.php");
	
  //取得 repassword.php 網頁的資料
  $newPassword = md5($_POST["password"]);
    
  //建立資料連接
  $link = create_connection();
				
  //執行 UPDATE 陳述式來更新使用者資料
  $sql = "UPDATE users SET password = '$newPassword' WHERE memberID = $memberID";
  $result = execute_sql($link, "wandering", $sql);
		
  //關閉資料連接
  mysqli_close($link);	

  //清除 cookie 內容
  setcookie("pass", "");
  setcookie("id", "");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>重設密碼成功</title>
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <br><br>
      恭喜您，已重設新密碼。
      <p><a href="login.html">回會員登入頁面</a></p>
    </center>        
  </body>
</html>






 





