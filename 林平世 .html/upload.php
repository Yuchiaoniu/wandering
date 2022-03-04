<?php
	require_once("dbtools.inc.php");
    $id = $_COOKIE["id"];
    $img = $_REQUEST['img'];
    
    
    echo $img . '<br>';
    ///  將CHECKBIX內容以陣列上傳
    $helpneed = $_REQUEST['helpneed'];
    //var_dump($habit);
    $myhelpneed = implode ( ',', $helpneed);
        echo $myhelpneed . '<hr />';
    


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



    /// 取得上傳內容後   將上傳內容傳到指定資料夾

    ////  傳到指定的資料夾
    $upload = $_FILES['img'];
    if ($upload['error'] == 0){
        // $i
        move_uploaded_file($upload['tmp_name'],
            './upload/' . createFilename($upload['name'], $index));
        
    }



       // 正常檔名
    // if ($upload['error'] == 0){
    //     if (move_uploaded_file($upload['tmp_name'],    //// 此為上傳圖檔的系統暫存區
    //             "upload/{$upload['name']}")){   /// 此為你要放置的路徑
    //         echo 'Upload success';
    //     }else{
    //         // copy failure
    //     }
    // }else{
    //     echo $upload['error'];
    //     // upload failure
    // }


    // 將資料夾路徑回寫給變數  新增到資料庫
    $img =  './upload/' . createFilename($upload['name'], $index) ;

    // $img = "upload/{$upload['name']}" ;

    echo '<br>' .$img ;



     // 抓取的值好後   建立連線
    $link = create_connection(); 

        //// 執行SQL 查詢
    $sql = "INSERT INTO rescue(img)  VALUES ( '$img' )"; 

    $result = execute_sql($link, "wandering", $sql);


        // 關閉連線
    mysqli_close($link); 
    
    // 重新導向回rescue.php 檢視頁面
    header("location:edit.php");
s

?>

<hr />