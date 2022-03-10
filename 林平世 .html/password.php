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
	
  /* 如果 cookie 中的 passed 變數等於 TRUE，
     表示已經登入網站，則取得使用者資料 */
  else
  {
    require_once("dbtools.inc.php");
	
    //取得 edit.php 網頁的資料
    $memberID = $_COOKIE["memberID"];
    $password = $_POST["password"];
    
    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE users SET password = 'password' WHERE memberID = $memberID";
    $result = execute_sql($link, "wandering", $sql);
		
    //關閉資料連接
    mysqli_close($link);
  }		
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
      <?php echo $name ?>恭喜您，已重設新密碼。
      <p><a href="edit.php">回會員專屬網頁</a></p>
    </center>        
  </body>
</html>






 






