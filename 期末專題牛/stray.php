<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>浪跡天涯 | 遺失協尋</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="assets/js/jquery.min.js"></script>

</head>

<body>


	<div id="page-wrapper">

		<!-- 匯入NAVBAR  -->
		<div id="navbar">
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<h2>遺失協尋</h2>
				<div class="row main-row">

					<!-- 匯入RESEARCH -->
					<!-- 搜尋列 -->
					<div id="research" class="col-8">
					</div>

					<!-- 最新公佈欄 -->
					<div class=" col-md-9 col-sm-12  ">

						<section>

							<ul class="big-image-list">
								<!-- 第一筆 -->
								<?php
								//// 資料庫連線使用外部匯入
								require_once("dbtools.inc.php");
								$link = create_connection();    /// 設定連線的資料庫(外部匯入)
								$sql = "select * from cofind";  /// 要做的SQL內容 >> 從RESCUE中取得全部資料  
								$result = execute_sql($link, "wandering", $sql);   ///  取得更新後的內容(外部匯入)
								?>

								
								<?php
								while ($row = mysqli_fetch_object($result)) {   ///  將更新後的內容每筆根據HTML條列
								?>
									<div class="card mb-3" style="max-width: 800px;">
										<div class="row g-0">
											<div class="col-md-4">
												<a href='stray_showDetail.php?id=<?php echo	$row->id ?> '>
													<img src="<?php echo    $row->img ?>" type="button" style="padding: 20px;height: auto; width: auto" class="img-fluid rounded-start" alt="...">
												</a>
											</div>
											<div class="col-md-8">
												<div class="card-body">
													<a href='stray_showDetail.php?id= <?php echo 	$row->id ?> '>
														<h5 class="card-title"> <?php echo   $row->title ?>
														</h5>
													</a>
													<h4>
														<div class="title">協尋案件編號：stray <?php echo    $row->id ?>
														</div>
													</h4>
													<div class="datecreate mb-1">
														<b class="card-text"> 動物類別：<?php echo    $row->type ?>
															<br>
															動物性別： <?php echo    $row->gender ?>
														</b>
														<br>
														動物名稱：<?php echo    $row->name ?>
														<br>
														有無晶片：<?php echo    $row->chip ?>
														<br><br>
														<a href='stray_showDetail.php?id=<?php echo 	$row->id ?> '>詳細資料</a></td>
														</tr>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php }; ?>


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
							<a href="strayForm.html">
								<h2 class="text-white">新增遺失通報</h2>
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
			$("#research").load("myscript/research.html"); //以ID找DOM，更改裡面的html
			$("#rightspace").load("myscript/rightspace.html"); //以ID找DOM，更改裡面的html    右側連結
			$("#footer").load("myscript/footer.html"); //以ID找DOM，更改裡面的html
		});
	</script>



</body>

</html>