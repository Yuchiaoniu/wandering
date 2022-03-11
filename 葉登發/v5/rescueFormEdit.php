<?php

$id = $_POST["rescueID"];

// echo $id;  //// 取得點擊個案ID值



require_once("dbtools.inc.php");

$link = create_connection();
// //執行SQL查詢
$sql = "SELECT * FROM rescue Where id = $id";
$result = execute_sql($link, "wandering", $sql);

$row = mysqli_fetch_object($result);



?>


<!DOCTYPE HTML>

<html>

<head>
	<title>浪跡天涯</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/jquery.twzipcode.min.js"></script>

	<style>
		.imagePreview {
			width: 123px;
			height: 123px;
			background: url(/images/no-img.jpg);
			background-color: #fff;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			display: inline-block;
			border-radius: 5px 5px 0 0;
			border: 1px solid #e1e1e1;
			box-shadow: inset 0 1px 2px rgb(0 0 0 / 8%);
			overflow: hidden;
		}

		.imgUp .btn {
			display: block;
			margin-top: -6px;
			font-size: 15px;
			margin-bottom: 10px;
			padding: 4px;
			border-radius: 0 0 5px 5px;
		}

		.btn-green {
			background: #51B9A3 !important;
			color: #fff !important;
		}
	</style>

	<!-- 整體邏輯:
	在表單form標籤上填上name屬性以利最後的是否重複驗證識別
	
	，在表單內的標籤填上各自的name屬性以利邏輯驗證識別

	，在下方的提交按鈕的onclick屬性中填上邏輯驗證函式名稱後

	，在填上action的執行檔案(驗證是否重複的函式)

	，最後在格式檢查邏輯函式的結尾用form的name.submit方法執行action以執行是否重複驗證函式驗證此筆資料是否重複 -->


	<!-- 分隔線============================================================================== -->
	<!-- 分隔線============================================================================== -->
	<!-- 分隔線============================================================================== -->


	<!-- 檢查格式邏輯:
	對form的name個別做以下的格式邏輯檢查

	，使用document.表單name.標籤name.value.length是不是為0

	，或者value是不是為0

	，以確定是否忘記填寫-->


	<script >
		function check_data() {

			if (document.rescueForm.title.value.length == 0) {
				alert("「標題」一定要填寫哦");
				return false;
			}

		
			// if (document.rescueForm.title.value.length > 255) {
			// 	alert("「標題字元」不可以超過 255 個哦");
			// 	return false;
			// }

			if (document.rescueForm.amount.value.length > 255 | document.rescueForm.amount.value.length==0  ) {
				alert("「數量」未填寫或者不可以超過 255 個哦");
				return false;
			}

			if (document.rescueForm.city.value.length == 0)
			{
			  alert("「縣市」欄位忘了填哦...");
			  return false;
			}
			// if (document.rescueForm.zone.value.length == 0)
			// {
			//   alert("「區域」欄位忘了填哦...");
			//   return false;
			// }


			if (document.rescueForm.address.value.length == 0)
			{
			  alert("您一定要留下地址哦！");
			  return false;
			}

			
			if (document.rescueForm.reason.value.length == 0) {
				alert("您忘了填「救援原因」欄位了");
				return false;
			}
			if (document.rescueForm.detail.value.length == 0) {
				alert("您忘了填「詳細說明」欄位了");
				return false;
			}
			// if (document.rescueForm.upload.value.length == 0) {
			// 	alert("請上傳一張照片哦!!!");
			// 	return false;
			// }

			rescueForm.submit();

		}
	</script>
</head>

<body>



	<div id="page-wrapper">

		<!-- 匯入NAVBAR  -->
		<div id="navbar"></div>
		<script>
			$(document).ready(function() {
				$("#navbar").load("myscript/navbar.php"); //以ID找DOM，更改裡面的html
			});
		</script>
		<!-- 匯入NAVBAR  END -->


		<!-- Main -->

		<h1 class="px-auto container ">修改救援資訊</h1>
		<br><br>
		<form action="rescueFormUpdate.php" name="rescueForm" method="post" enctype="multipart/form-data" style="background-color: rgba(220, 220, 220, 0.534)" class="px-auto container col-6">
			<div class="form-group">
				<label for="text">*救援標題</label>
				<input id="text" name="title" placeholder="EX:發現受傷的小貓需要救援" type="text" class="form-control" value="<?PHP echo    $row->title ?>">
			</div>

			<!-- 再次用隱藏方塊把ID 當參數傳給UPDATE  -->
			<input name='id' style="display:none" type="text" value=<?PHP echo    $row->id ?>>



			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="select">*動物類別</label>
					<div>
						<select id="select" name="type" class="custom-select">


							<option <?php if ($row->type == '狗') echo "selected"; ?> value="狗">狗</option>
							<option <?php if ($row->type == '貓') echo "selected"; ?> value="貓">貓</option>
						</select>
					</div>
				</div>

				<div class="form-group col-md-6">
					<label for="text1">動物數量</label>
					<input id="text1" name="amount" type="number" class="form-control" value="<?PHP echo    $row->amount ?>">
				</div>
			</div>

			<div>
				<label for="zipcodeSelect">*地址</label>
				<div id="zipcodeSelect" class="form-row" style="margin-left: 0px; margin-right: 0px;"></div>
			</div>

			<script>
				$("#zipcodeSelect").twzipcode({
					countySel: "<?PHP echo    $row->city ?>", // 城市預設值 
					districtSel: "<?PHP echo    $row->town ?>", // 地區預設值
					zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
					css: [" city form-control col-6", "town   form-control col-6"], // 自訂 "城市"、"地區" class 名稱
					countyName: "city", // 自訂城市 select 標籤的 name 值
					districtName: "town" // 自訂地區 select 標籤的 name 值
				});
			</script>



			<div class="form-group">
				<label for="text2">*街道地址</label>
				<input id="text2" name="address" type="text" class="form-control" aria-describedby="text2HelpBlock" value="<?PHP echo    $row->address ?>">
				<span id="text2HelpBlock" class="form-text text-muted">我們不會直接顯示詳細地址，我們只提供認證過手機的會員查看，並且會保存紀錄供後續留查。</span>
			</div>
			<div class="form-group">
				<label for="select3">*走失標記</label>
				<div>
					<select id="select3" name="lost" class="custom-select" aria-describedby="select3HelpBlock">
						<option <?php if ($row->lost == '是') echo "selected"; ?> value="是">是</option>
						<option <?php if ($row->lost == '否') echo "selected"; ?> value="否">否</option>
					</select>
					<span id="select3HelpBlock" class="form-text text-muted">此欄位代表是否為疑似走失，如果是，我們會增加特殊標示。</span>
				</div>
			</div>
			<div class="form-group">
				<label>*救援需求</label>
				<div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->need, "傷病就醫") !== false) echo 'checked' ?> name="need[]" id="checkbox_0" type="checkbox" class="custom-control-input" value="傷病就醫">
						<label for="checkbox_0" class="custom-control-label">傷病就醫</label>
					</div>

					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->need, "借誘捕籠") !== false) echo 'checked' ?> name="need[]" id="checkbox_1" type="checkbox" class="custom-control-input" value="借誘捕籠">
						<label for="checkbox_1" class="custom-control-label">借誘捕籠</label>
					</div>

					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->need, "尋求誘捕協助") !== false) echo 'checked' ?> name="need[]" id="checkbox_2" type="checkbox" class="custom-control-input" value="尋求誘捕協助">
						<label for="checkbox_2" class="custom-control-label">尋求誘捕協助</label>
					</div>

					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->need, "尋求抓紮協助") !== false) echo 'checked' ?> name="need[]" id="checkbox_3" type="checkbox" class="custom-control-input" value="尋求抓紮協助">
						<label for="checkbox_3" class="custom-control-label">尋求抓紮協助</label>
					</div>

					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->need, "尋求安置協助") !== false) echo 'checked' ?> name="need[]" id="checkbox_4" type="checkbox" class="custom-control-input" value="尋求安置協助">
						<label for="checkbox_4" class="custom-control-label">尋求安置協助</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="textarea">*救援原因</label>
				<textarea id="textarea" name="reason" cols="40" rows="5" class="form-control"><?PHP echo    $row->detail ?></textarea>
			</div>
			<div class="form-group">
				<label for="textarea1">詳細說明</label>
				<textarea id="textarea1" name="detail" cols="40" rows="5" class="form-control"><?PHP echo    $row->reason ?></textarea>
			</div>
			<div class="form-group">
				<label>*通報人可負擔事項</label>
				<div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "可提供安置照顧空間") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_0" type="checkbox" class="custom-control-input" value="可提供安置照顧空間">
						<label for="checkbox1_0" class="custom-control-label">可提供安置照顧空間</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "可自行親送至外縣市") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_1" type="checkbox" class="custom-control-input" value="可自行親送至外縣市">
						<label for="checkbox1_1" class="custom-control-label">可自行親送至外縣市</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "願意負擔救援所需費用") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_2" type="checkbox" class="custom-control-input" value="願意負擔救援所需費用">
						<label for="checkbox1_2" class="custom-control-label">願意負擔救援所需費用</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "願意負擔救援所需物資") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_3" type="checkbox" class="custom-control-input" value="願意負擔救援所需物資">
						<label for="checkbox1_3" class="custom-control-label">願意負擔救援所需物資</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "救援完成後可自行接回") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_4" type="checkbox" class="custom-control-input" value="救援完成後可自行接回">
						<label for="checkbox1_4" class="custom-control-label">救援完成後可自行接回</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "無法負擔任何事項<") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_5" type="checkbox" class="custom-control-input" value="無法負擔任何事項">
						<label for="checkbox1_5" class="custom-control-label">無法負擔任何事項</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-inline">
						<input <?php if (strpos($row->responsibility, "不適用於通報案件") !== false) echo 'checked' ?> name="responsibility[]" id="checkbox1_6" type="checkbox" class="custom-control-input" value="不適用於通報案件">
						<label for="checkbox1_6" class="custom-control-label">不適用於通報案件</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="textarea2">*照片上傳</label>
				<div class="form-group row">
					<input type="file" id='fileInput' name="upload"  value="<?PHP echo   $row->img ?>">
					<!-- <div class="col-md-3 imgUp" style="max-width: 100%;">
						<div class="imagePreview">
							<img id="finalImg1" width="100%">
						</div>
						<label class="btn btn-green replaceImg" data-sid="1">
							
							<button method="post" name="img" type="submit" class="btn btn-primary" onclick="">更改圖檔(封面)</button>
						</label>
					</div> -->
					<!-- <div class="col-md-3 imgUp" style="max-width: 100%;">
						<div class="imagePreview">
							<img id="finalImg2" width="100%">
						</div>
						<label class="btn btn-green replaceImg" data-sid="2">
							更改圖檔
						</label>
					</div>
					<div class="col-md-3 imgUp" style="max-width: 100%;">
						<div class="imagePreview">
							<img id="finalImg3" width="100%">
						</div>
						<label class="btn btn-green replaceImg" data-sid="3">
							更改圖檔
						</label>
					</div> -->

					<!-- <div class="col-md-12">
						<span class="mb-0 text-red">※ 小提醒：封面(第一張)可以放上最可愛或最有特徵的照片喔！</span>
					</div> -->

				</div>
			</div>
			<div class="form-group">
				<!-- <button  class="btn btn-primary" onclick="check_data()">確認送出</button> -->
				<input class="btn btn-primary" type="button" onclick="check_data()" value="確認送出">
			</div>
		</form>


		<!-- Footer  -->
		<br />
		<div style="background-color: aliceblue;" id="footer-wrapper">
			<div class="container">

				<div class="row">
					<div class="col-12">

						<div id="copyright">
							&copy; 浪跡天涯. | Design: <a href="http://html5up.net">HTML5 UP</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<?php mysqli_close($link); ?>


		<script>
			window.onload = function() {
				let user = getCookie("passed");
				if (user != "TRUE") {
					alert("本功能限定會員使用");
					document.location.href = "./login.html";
				}

			}


			function getCookie(cname) { //檢查是否通過
				let name = cname + "=";
				let decodedCookie = decodeURIComponent(document.cookie); //decodeURIComponent() 方法用於解碼由 encodeURIComponent 方法或者其它類似方法編碼的部分統一資源標識符（URI）。
				let ca = decodedCookie.split(';'); //split(';'):使用 ; 符號指定分割字串位置
				for (let i = 0; i < ca.length; i++) {
					let c = ca[i];
					while (c.charAt(0) == ' ') { //charAt 可以用來取得字串中特定位置的字元。
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) { //indexOf() 方法會回傳給定元素於陣列中第一個被找到之索引，若不存在於陣列中則回傳 -1
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
		</script>



</body>

</html>