<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function create_connection()
    {

    $link = mysqli_connect("localhost", "root", "root")
        or die("無法建立資料連結:".mysqli_connect_error());//連線
        mysqli_query($link,"SET NAMES utf8");//query要執行的查詢目標，$link定義為連結的使用者，第二個為顯示的格式
        return $link;
    }



    function execute_sql($link, $wandering, $sql)//第一個為上一個函式定義的連結對象(使用者)，第二個為資料庫，第三個為對資料庫做的指令
    {
        mysqli_select_db($link, $wandering)
        or die("無法開啟wandering資料庫:".mysqli_error($link));//選取資料庫
            $result = mysqli_query($link, $sql);

            return $result;
        }

    ?>
</body>
</html>