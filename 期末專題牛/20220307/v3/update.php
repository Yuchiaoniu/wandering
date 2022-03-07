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
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $birthday = $_POST["birthday"];
    $cellphone = $_POST["cellphone"];
    $hide = $_POST["hide"];
    $city = $_POST["city"];
    $town = $_POST["town"];

    ////  更改黨名函數
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

    // 取得上傳內容後   將上傳內容傳到指定資料夾
    $upload = $_FILES['upload'];
    if ($upload['error'] == 0){
      // $i
      move_uploaded_file($upload['tmp_name'],
          './upload/' . createFilename($upload['name'], $index));
    }

    // 將資料夾路徑回寫給變數  新增到資料庫
    $img = './upload/' . createFilename($upload['name'], $index) ;

		
    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE users SET name = '$name', 
            sex = '$sex', birthday = '$birthday', 
            cellphone = '$cellphone', hide = '$hide',  
            city = '$city', town = '$town',
            img = '$img' WHERE memberID = $memberID";
    $result = execute_sql($link, "wandering", $sql);
		
    //關閉資料連接
    mysqli_close($link);
  }		
?>
<!DOCTYPE html>
<html>
  <head>
    <title>修改會員資料成功</title>
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <img src="<?php echo $img ?>"
      style="width: 125px; 
      height: 125px; 
      border-radius: 100%; 
      border: 2px solid rgb(180, 175, 175);">
      <br><br>
      <?php echo $name ?>，恭喜您已經修改資料成功了。
      <p><a href="edit.php">回會員專屬網頁</a></p>
    </center>        
  </body>
</html>