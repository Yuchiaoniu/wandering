<?php
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $account = $_POST["account"];
  $password = $_POST["password"]; 
  $name = $_POST["name"]; 
  $sex = $_POST["sex"];
  $birthday = $_POST["birthday"];
  $address = $_POST["address"];


  //建立資料連接
  $link = create_connection();
			
  //檢查帳號是否有人申請
  $sql = "SELECT * FROM users Where account = '$account'";
  $result = execute_sql($link, "wandering", $sql);

  //如果帳號已經有人使用
  if (mysqli_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
		
    //顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
		
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO users (account, password, name, sex,
            birthday, address) 
            VALUES ('$account', '$password', '$name', '$sex',
            '$birthday', '$address')";

    $result = execute_sql($link, "wandering", $sql);
  }
	
  //關閉資料連接	
  mysqli_close($link);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>新增帳號成功</title>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center"><img src="./images/success.jpg">       
    <p align="center">恭喜您已經註冊成功了，您的資料如下：（請勿按重新整理鈕）<br>
      帳號：<font color="#FF0000"><?php echo $account ?></font><br>
      密碼：<font color="#FF0000"><?php echo $password ?></font><br>       
      請記下您的帳號及密碼，然後<a href="./login.html">登入網站</a>。
    </p>
  </body>
</html>