<?php
    require_once("dbtools.inc.php");
	
    //取得 edit.php 網頁的資料
    $adoptID = $_COOKIE["memberID"];
    $id = $_POST["id"];

    // echo $adoptID;
    // echo $id;

    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE adopt SET adoptID = '$adoptID' WHERE id = $id";
    $result = execute_sql($link, "wandering", $sql);
		
    //關閉資料連接
    mysqli_close($link);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>認養成功</title>
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <br><br>
      恭喜您已經認養成功。<br>
      要好好照顧它哦！
      <p><a href="adopt.php">返回認養頁面</a></p>
    </center>        
  </body>
</html>