<?php
    require_once('./phpmailer/PHPMailerAutoload.php');


    $C_name=$_POST['C_name'];
    $C_email=$_POST['C_email'];
    $C_tel=$_POST['C_tel'];
    $C_message=$_POST['C_message'];
   
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

    $mail->Subject ="來自".$C_name."留言"; //郵件標題
    // $mail->Body = "姓名:".$C_name."<br />信箱:".$C_email."<br />電話:".$C_tel."<br />回應內容:".$C_message; //郵件內容
    $mail->Body = "姓名:".$C_name."<br />信箱:".$C_email."<br />回應內容:<a href='http://localhost/v5/index.php' target='_blank'>按此登入本站</a>"; //郵件內容

    

    $mail->IsHTML(true);                             //郵件內容為html
    $mail->AddAddress("$C_email");            //收件者郵件及名稱

    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
    }else{
        echo "<b>感謝您的留言，您的建議是我們前進的動力。</b>";
    }
?>