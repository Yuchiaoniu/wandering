<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="/cards/card.css"> -->

    <style>
        .card.h-80 {
            height: 380px;
        }
    </style>

</head>

<body>

    <?php
    //// 資料庫連線使用外部匯入
    require_once("dbtools.inc.php");
    $link = create_connection();    /// 設定連線的資料庫(外部匯入)
    $sql =  "SELECT img, title ,id from stray ORDER BY id DESC LIMIT 0 , 6  ";  /// 要做的SQL內容 >> 從RESCUE中取得全部資料  
    $result = execute_sql($link, "wandering", $sql);   ///  取得更新後的內容(外部匯入)
    ?>
    <div class="container-fluid">
        <div class="row" style="margin-top: 0;">
            <?php while ($row = mysqli_fetch_object($result)) {   ///  將更新後的內容每筆根據HTML條列	    
            ?>
                <div class="col-4 ">

                    <div class="card h-80 ">
                        <a href='stray_showDetail.php?id=<?php echo     $row->id ?>'><img class="img-fluid" src="<?php echo $row->img ?>" /></a>
                        <div class="card-body">
                            <a href='stray_showDetail.php?id=<?php echo     $row->id ?>'>
                                <p><?php echo $row->title ?></p>
                            </a>
                        </div>
                        <div class="card-footer">
                            <a href="stray_showDetail.php?id=<?php echo     $row->id ?>" class="card-link btn btn-outline-primary float-right">詳細資訊</a>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>

    </div>
</body>

</html>