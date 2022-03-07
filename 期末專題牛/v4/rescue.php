<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>浪跡天涯 | 流浪救援</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.twzipcode.min.js"></script>
	<?php   //PHP
								//// 資料庫連線使用外部匯入
								require_once("dbtools.inc.php");
								$link = create_connection();    /// 設定連線的資料庫(外部匯入)
								
								/// 查詢指定資料庫結果

								if(isset($_POST['id'])){
									$sid = $_POST['id'];
								  }else{
									$sid = "x";#default value
								  }

								  if(isset($_POST['title'])){
									$stitle = $_POST['title'];
								  }else{
									$stitle = "x";#default value
								  }

								  if(isset($_POST['city'])){
									$scity = $_POST['city'];
								  }else{
									$scity = "x";#default value
								  }

								  if(isset($_POST['town'])){
									$stown = $_POST['town'];
								  }else{
									$stown = "x";#default value
									echo $stown;
								  }
								if($sid != "x" | $stitle != "x" | $scity != "x" | $stown != "x"){
								$sql = "select * from rescue where title like '%$stitle%' and id like '%$sid%' and city like '%$scity%'
										 and town like '%$stown%' 
										Order BY date;";}
										else{$sql = "select * from rescue Order BY date desc;";}  /// 要做的SQL內容 >> 從RESCUE中取得全部資料  
								$result = execute_sql($link, "wandering", $sql);
								
								?>
</head>

<body>


	<div id="page-wrapper">

		<!-- 匯入NAVBAR  -->
		<div id="navbar">
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<h2>流浪救援</h2>
				<div class="row main-row">

					<!-- 匯入RESEARCH -->
					<!-- 搜尋列 -->
					<div class="col-12  ">
    <form method="post" action="">

        <div class="row mg-10 pb-3">

            <div class="pd-10 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="" placeholder="請輸入關鍵字">
                </div>

            </div>
        </div>

        <div class="form-row mg-10">
            <div class="pd-10 col-md-3">
                <div class="form-group">

                    <input type="text" class="form-control" name="id" value="" placeholder="案件編號">
                </div>
            </div>
            

            <div class='col-md-6 '>
                <div id="zipcodeSelect" class="form-row "></div>
            </div>

            <script>
                $("#zipcodeSelect").twzipcode({
                    // countySel: "臺北市", // 城市預設值 
                    // districtSel: "大安區", // 地區預設值
                    zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
                    css: [" city form-control col-6", "town col-6  form-control"], // 自訂 "城市"、"地區" class 名稱
                    countyName: "city", // 自訂城市 select 標籤的 name 值
                    districtName: "town" // 自訂地區 select 標籤的 name 值
                });
            </script>

        </div>
        <button class="btn btn-narmal ">重設</button>
        <button class="btn btn-narmal btn-primary mx-3" type="submit" >確定</button>

    </form>
</div>

					<!-- 最新公佈欄 -->
					<div class=" col-md-9 col-sm-12  ">

						<section>

							<ul class="big-image-list">


								

								<?php
								while ($row = mysqli_fetch_object($result)) {   ///  將更新後的內容每筆根據HTML條列
								?>

									<div class="card mb-3" style="max-width: 800px;">
										<div class="row g-0">
											<div class="col-md-4">
												<a href="rescue_Detail_1.html">
													<img src="<?php echo	$row->img ?>" type="button" style="padding: 20px;	; height: auto; width: auto;" class="img-fluid rounded-start" alt="...">
												</a>
											</div>
											<div class="col-md-8">
												<div class="card-body">

													<a href="rescue_showDetail.php?id=<?PHP echo 	$row->id?>">
														<h5 class="card-title"><?php echo    $row->title ?></h5>
													</a>
													<h4>
														<div class="title">救援案件編號：RE<?PHP  echo    $row->id?></div>
													</h4>
													<div class="datecreate mb-1">
														<h4 class="date-title"><?PHP echo $row->date; ?></h4>
														<b class="card-text">
														動物類別： <?PHP echo    $row->type ?>
														 <br>
														動物數量： <?PHP echo    $row->amount?>	<br>
														縣市： <?PHP echo    $row->city?><br>
														鄉鎮區： <?PHP echo    $row->town?> 
														</b>
														<br><br>
														<a href="rescue_showDetail.php?id=<?PHP echo 	$row->id?>">詳細資訊</a>
													</div>
												</div>
											</div>
										</div>
									</div>

								<?php	};	?>


								<?php
								mysqli_free_result($result);  /// 釋放暫存記憶體
								mysqli_close($link);  /// 關閉連線


								?>



							</ul>
						</section>
					</div>
					<!-- 最新公佈欄  END-->

					<div class="col-md-3 col-sm-12 ">
						<div class="btn btn-info mb-5 ">
							<a href="rescueForm.html">
								<h2 class="text-white">新增救援資訊</h2>
							</a>
						</div>
						<!-- 下半部右側相關連結 -->
						<div id="rightspace"></div>

					</div>
				</div>
			</div>
		</div>

		<!-- 匯入Footer  -->
		<div id="footer">
		</div>

	</div>

	<script>
		$(document).ready(function() {
			$("#navbar").load("myscript/navbar.php"); //以ID找DOM，更改裡面的html
			$("#rightspace").load("myscript/rightspace.html"); //以ID找DOM，更改裡面的html    右側連結
			$("#footer").load("myscript/footer.html"); //以ID找DOM，更改裡面的html
		});
	</script>

</body>

</html>