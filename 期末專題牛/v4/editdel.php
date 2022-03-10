<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  require_once("dbtools.inc.php");
  
  

  //建立資料連接
  $link = create_connection();

  //取得表單資料
  $edit = $_POST["edit"];
  echo $edit;
  $del = $_POST["del"];
  echo $del;
  
	// 	if 
  //   //執行 SQL 命令，新增此帳號
  //   $sql = "INSERT INTO adopt (memberID, title, type, nickname, gender,
  //         city, town, ear, ligation, reason, 
  //         status, adopt_city, 
  //         adoptcondition, img) 
	// 		VALUES ('$memberID', '$title', '$type', '$nickname', '$gender', 
  //             '$city', '$town', '$ear', '$ligation', '$reason',
  //              '$status', '$adopt_city',
	// 		        '$adoptcondition', '$img');";

  //   $result = execute_sql($link, "wandering", $sql);
	
  // //關閉資料連接	
  // mysqli_close($link);

  // // 重新導向回rescue.php 檢視頁面
  // header("location:adopt.php");
?>
<div>ddd</div>
</body>
</html>