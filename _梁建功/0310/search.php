<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $account = $_POST["account"]; 
  // $name = $_POST["name"];
  // $show_method = $_POST["show_method"]; 

  //建立資料連接
  $link = create_connection();
			
  //檢查查詢的帳號是否存在
  $sql = "SELECT name, memberID, password FROM users WHERE account = '$account'";
  $result = execute_sql($link, "wandering", $sql);

  //如果帳號不存在
  if (mysqli_num_rows($result) == 0)
  {
    //顯示訊息告知使用者，查詢的帳號並不存在
    echo "<script type='text/javascript'>
            alert('您所查詢的資料不存在，請檢查是否輸入錯誤。');
            history.back();
          </script>";
  }
  else  //如果帳號存在
  {
    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $memberID = $row["memberID"];
    $password = $row["password"];

    $code = $password.$memberID;

    $message = "
      <!doctype html>
      <html>
        <head>
          <title>重設密碼</title>
          <meta charset='utf-8'>
        </head>
        <body>
        <center>
          <img src='images/indexlogo.jpg'
          style='width: 125px; 
          height: 125px; 
          border-radius: 100%; 
          border: 2px solid rgb(180, 175, 175);'>
          <br><br>
          $name 您好，已將重設密碼傳送至此信箱：<br><br>
          帳號(信箱)：$account<br><br>
          請查收並重設密碼後再<a href='login.html'>登入本站</a>
        </center>
        </body>
      </html>
    ";
	
    // if ($show_method == "網頁顯示")
    // {
      echo $message;   //顯示訊息告知使用者帳號密碼
    // }
    // else
    // {
    //   $subject = "=?utf-8?B?" . base64_encode("帳號通知") . "?=";
    //   $headers  = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
    //   mail($account, $subject, $message, $headers);	

    //   //顯示訊息告知帳號密碼已寄至其電子郵件了
    //   echo "$name 您好，您的帳號資料已經寄至 $account<br><br>
    //         <a href='login.html'>按此登入本站</a>";				
    // }

    require_once('./phpmailer/PHPMailerAutoload.php');
   
    $mail= new PHPMailer();                          //建立新物件

    $mail->IsSMTP();                                    //設定使用SMTP方式寄信
    $mail->SMTPAuth = true;                        //設定SMTP需要驗證
    
    $mail->SMTPSecure = "ssl";                    // Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com";             //Gamil的SMTP主機
    $mail->Port = 465;                                 //Gamil的SMTP主機的埠號(Gmail為465)。

    $mail->CharSet = "utf-8";                       //郵件編碼

    $mail->Username = "tonyliang1013@gmail.com"; //Gamil帳號
    $mail->Password = "b123126312";                 //Gmail密碼

    $mail->From = "tonyliang1013@gmail.com";        //寄件者信箱
    $mail->FromName = "浪跡天涯小天使";                  //寄件者姓名

    $mail->Subject ="浪跡天涯";             //郵件標題
    $mail->Body = "$name 您好！<br />
                  我們收到了您重設密碼的請求，請點擊下方連結重設密碼。<br />
                  <a href='http://localhost/v5/index.php?code=$code' target='_blank'>請按此重設密碼</a>"; //郵件內容

    $mail->IsHTML(true);                             //郵件內容為html
    $mail->AddAddress("$account");            //收件者郵件及名稱

    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
    }
    // else{
    //     echo "<b>感謝您的留言，您的建議是我們前進的動力。</b>";
    // }

    
  }

  //釋放 $result 佔用的記憶體
  mysqli_free_result($result);
		
  //關閉資料連接	
  mysqli_close($link);
?>