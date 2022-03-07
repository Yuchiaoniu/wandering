<?php
  require_once("dbtools.inc.php");
  
  

  //建立資料連接
  $link = create_connection();

  //取得表單資料
  $title = $_POST["title"];
  $type = $_POST["type"]; 
  $nickname = $_POST["nickname"];
  $city = $_POST["city"];
  $town = $_POST["town"];
	$gender = $_POST["gender"];
  $ligation = $_POST["ligation"];
  $ear = $_POST["ear"];
  $reason = $_POST["reason"];
  $status = $_POST["status"];
  $adoptcondition = $_POST["adoptcondition"];
  $memberID = $_COOKIE['memberID'];

  if(isset($_POST['adopt_city'])){
    $adopt_city = $_POST['adopt_city'];
}else{
    $adopt_city = "";#default value
}

if(isset($_POST['img'])){
  $img = $_POST['img'];
}else{
  $img = "x";#default value
}

  // 將陣列變成個別字串以解決上傳時array covert to string的問題
  $a = $_REQUEST['adopt_city'];
  
  $adopt_city = implode(', ',$a);


  //圖片上傳
  $upload = $_FILES['upload'];
    if ($upload['error'] == 0){
        // $i
        move_uploaded_file($upload['tmp_name'],
            './upload/' . createFilename($upload['name'], $index));
        
    }

     ////  更改檔名函數
     function createFilename($source, $index){
      date_default_timezone_set('Asia/Taipei');
      $data = explode('.',$source);
      if (count($data)>=2){
          $sname = '.' . $data[count($data)-1] ;
      }else{
          $sname = '';
      }
      $filename = date('Ymd_His') . $index  . $sname;
      return $filename;
  }

    // 將資料夾路徑回寫給變數  新增到資料庫
    $img =  './upload/' . createFilename($upload['name'], $index) ;

    // $img = "upload/{$upload['name']}" ;

    echo '<br>' .$img ;
  
		
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO adopt (memberID, title, type, nickname, gender,
          city, town, ear, ligation, reason, 
          status, adopt_city, 
          adoptcondition, img) 
			VALUES ('$memberID', '$title', '$type', '$nickname', '$gender', 
              '$city', '$town', '$ear', '$ligation', '$reason',
               '$status', '$adopt_city',
			        '$adoptcondition', '$img');";

    $result = execute_sql($link, "wandering", $sql);
	
  //關閉資料連接	
  mysqli_close($link);

  // 重新導向回rescue.php 檢視頁面
  header("location:adopt.php");
?>