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


								$sql = "select * from rescue ";  /// 要做的SQL內容 >> 從RESCUE中取得全部資料  

								 /// 查詢指定資料庫結果
								$result = execute_sql($link, "wandering", $sql);  
								
								// for(
								//     $i = 0;	
								//     $i < mysqli_num_fields($result);
								//     $i++);

								while ($row = mysqli_fetch_object($result)) {   ///  將更新後的內容每筆根據HTML條列
									echo '<div class="card mb-3" style="max-width: 800px;">';
									echo '<div class="row g-0">';
									echo	'<div class="col-md-4">';
									echo	'<a href="rescue_Detail_1.php">';
									echo		'<img src="';
									echo    $row->img;
									echo    '" type="button" style="padding: 20px;height: auto; width: auto;"
                                            class="img-fluid rounded-start" alt="...">';
									echo	"</a>";
									echo "</div>";
									echo '<div class="col-md-8">';
									echo	'<div class="card-body">';

									echo		'<a href="./rescue_Detail_1.php">';
									echo				'<h5 class="card-title">';
									echo    $row->title;
									echo                '</h5>';
									echo		'</a>';
									echo		        '<h4>';
									echo			'<div class="title">救援案件編號：rescue';
									echo    $row->id;
									echo    '</div>';
									echo		        '</h4>';
									echo		'<div class="datecreate mb-1">';
									echo			'<h4 class="date-title">建立日期：';
									echo $row->date;
									echo            '</h4>';
									echo			'<b class="card-text">';
									echo				'動物類別：';
									echo    $row->type;
									echo    '<br>';
									echo				'動物數量：';
									echo    $row->amount;
									echo			'</b>';
									echo			'<br>';
									echo			'<a href="./rescue_Detail_1.php">詳細資訊</a>';
									echo		'</div>';

									echo	'</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
								};



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
			$("#research").load("myscript/research.html"); //以ID找DOM，更改裡面的html
			$("#rightspace").load("myscript/rightspace.html"); //以ID找DOM，更改裡面的html    右側連結
			$("#footer").load("myscript/footer.html"); //以ID找DOM，更改裡面的html
		});
	</script>

</body>

</html>