<?php


$x = $_SERVER['QUERY_STRING'] ;// 取得當前網域?後面的值 為字串 id = 我的傳入值

$y = mb_split('=',$x)  ;  ///用 "=" 分割字串為陣列2個值

$id = $y[1] ;    //取得後面陣列的值就是ID

echo $id ;




require_once("dbtools.inc.php");


//建立資料連接
$link = create_connection();
// //執行SQL查詢
$sql = "DELETE FROM rescue Where id = $id";
$result = execute_sql($link, "wandering", $sql);


header("location:rescue_manager.php");

?>