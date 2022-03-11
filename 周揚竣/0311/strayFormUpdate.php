<?php


require_once("dbtools.inc.php");



//建立資料連接
$link = create_connection();

//取得表單資料
$id = $_POST["id"]; //
$title = $_POST["title"];//
$type = $_POST["type"];//
$nickname = $_POST["nickname"];//
$city = $_POST["city"];//
$town = $_POST["town"];//
$address = $_POST["address"];

$chip = $_POST["chip"];
$gender = $_POST["gender"];
$ligation = $_POST["ligation"];
$ear = $_POST["ear"];

$appearance = $_POST["appearance"];
$reason = $_POST["reason"];
$detail = $_POST["detail"];
$contact = $_POST["contact"];

$memberID = $_COOKIE['memberID'];



// if(isset($_POST['img'])){
//   $img = $_POST['img'];
// }else{
//   $img = "x";#default value
// }

// 將陣列變成個別字串以解決上傳時array covert to string的問題
// $r = $_REQUEST['responsibility'];
// $n = $_REQUEST['need'];


//圖片上傳
$upload = $_FILES['upload'];
if ($upload['error'] == 0) {
    // $i
    move_uploaded_file(
        $upload['tmp_name'],
        './upload/' . createFilename($upload['name'], $index)
    );
}

////  更改檔名函數
function createFilename($source, $index)
{
    date_default_timezone_set('Asia/Taipei');
    $data = explode('.', $source);
    if (count($data) >= 2) {
        $sname = '.' . $data[count($data) - 1];
    } else {
        $sname = '';
    }
    $filename = date('Ymd_His') . $index  . $sname;
    return $filename;
}

// 將資料夾路徑回寫給變數  新增到資料庫
$img =  './upload/' . createFilename($upload['name'], $index);

// $img = "upload/{$upload['name']}" ;

// echo '<br>' .$img ;

// echo $id .'<br>' ;   //確認收到的值
// echo $title .'<br>' ;
// echo $type .'<br>' ;
// echo $amount .'<br>' ;
// echo $city .'<br>' ;
// echo $town .'<br>' ;
// echo $address .'<br>' ;
// echo $lost .'<br>' ;
// echo $reason .'<br>' ;
// echo $detail .'<br>' ;
// echo $nd .'<br>' ;
// echo $ry .'<br>' ;
// echo $img  ;




//執行 SQL 命令，新增此帳號


$sql =  "UPDATE stray SET title = '$title'
,type = '$type' , nickname = '$nickname' , city = '$city' , town = '$town',
address = '$address' , chip = '$chip' , gender = '$gender' , detail = '$detail' , 
ligation = '$ligation' , ear  = '$ear ' ,  img = '$img'  , appearance = '$appearance' ,  reason = '$reason' , 
contact = '$contact' , img = '$img'  
where id = '$id'  ";






$result = execute_sql($link, "wandering", $sql);

//關閉資料連接	
mysqli_close($link);


// 重新導向回rescue.php 檢視頁面

header("location:stray_manager.php");


?>