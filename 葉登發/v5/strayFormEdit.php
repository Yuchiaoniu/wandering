<?php

$id = $_POST["rescueID"];

// echo $id;  //// 取得點擊個案ID值



require_once("dbtools.inc.php");

$link = create_connection();
// //執行SQL查詢
$sql = "SELECT * FROM stray Where id = $id";
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


	<script type="text/javascript">
		function check_data() {


			
			if (document.strayForm.title.value.length == 0) {
				alert("「標題」一定要填寫哦！");
				return false;
			}
			
			// if (document.rescueForm.title.value.length > 255) {
			// 	alert("「標題字元」不可以超過 255 個哦");
			// 	return false;
			// }
			
			if (document.strayForm.nickname.value.length == 0) {
				alert("請填寫你寶貝的名稱喔!");
				return false;
			}

			if (document.strayForm.city.value.length == 0)
			{
			  alert("「縣市」欄位忘了填哦...");
			  return false;
			}

			if (document.strayForm.address.value.length == 0) {
				alert("您一定要留下地址哦！");
				return false;
			}

			
			if (document.strayForm.appearance	.value.length == 0) {
				alert("請填寫您遺失寶貝的外觀特徵喔!");
				return false;
			}


			if (document.strayForm.contact.value.length == 0) {
				alert("請填寫聯絡方式");
				return false;
			}

			if (document.strayForm.detail.value.length == 0) {
				alert("請填寫遺失經過");
				return false;
			}

			// if (document.strayForm.upload.value.length == 0) {
			// 	alert("請協助上傳圖片");
			// 	return false;
			// }


			strayForm.submit();

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

		<!-- Main -->
		<h1 class="px-auto container ">修改遺失通報</h1>
		<br><br>

		<form name="strayForm" action="strayFormUpdate.php" method="post" enctype="multipart/form-data" style="background-color: rgba(220, 220, 220, 0.534)" class=" container col-md-6 ">
			<div class="form-group">
				<label for="text">*遺失標題</label>
				<input value="<?PHP echo    $row->title ?>" id="text" name="title" placeholder="EX:我家寶貝走失了 拜託幫忙留意" type="text" class="form-control">
			</div>


			<!-- 再次用隱藏方塊把ID 當參數傳給UPDATE  -->
			<input name='id' style="display:none" type="text" value=<?PHP echo    $row->id ?>>



			<div class="form-row ">

				<div class="col-md-4 col-6">
					<label for="select">*動物類別</label>
					<select id="select" name="type" class="custom-select">
						<option <?php if ($row->type == '狗') echo "selected"; ?>>狗</option>
						<option <?php if ($row->type == '貓') echo "selected"; ?> value="貓">貓</option>
					</select>

				</div>

				<div class="col-md-4 col-6">
					<label for="text1">*動物名稱</label>
					<input value="<?PHP echo    $row->nickname ?>" id="text1" name="nickname" placeholder="EX:小白" type="text" class="form-control">
				</div>


				<div class="form-group col-md-4">
					<label for="select1">*有無晶片</label>
					<div>
						<select id="select1" name="chip" class="custom-select">
							<option <?php if ($row->chip == '是') echo "selected"; ?>>是</option>
							<option <?php if ($row->chip == '否') echo "selected"; ?>>否</option>
						</select>
					</div>
				</div>

			</div>


			<div class="form-row ">



				<div class="col-md-4 col-6">
					<label for="select3">*動物性別</label>
					<div>
						<select id="select3" name="gender" class="custom-select">
							<option <?php if ($row->gender == '男') echo "selected"; ?>>男</option>
							<option <?php if ($row->gender == '女') echo "selected"; ?>>女</option>
						</select>
					</div>
				</div>




				<div class="col-md-4 col-6">
					<label for="select5">*是否結紮</label>
					<div>
						<select id="select5" name="ligation" class="custom-select">
							<option <?php if ($row->ligation == '是') echo "selected"; ?>>是</option>
							<option <?php if ($row->ligation == '否') echo "selected"; ?>>否</option>
						</select>
					</div>
				</div>

				<div class="col-md-4 col-6">
					<label for="select4">*剪耳狀態</label>
					<div>
						<select id="select4" name="ear" class="custom-select">
							<option <?php if ($row->ear == '是') echo "selected"; ?>>是</option>
							<option <?php if ($row->ear == '是') echo "selected"; ?>>否</option>
						</select>
					</div>
				</div>

			</div>

			<div>
				<label for="zipcodeSelect">*地址 </label>
				<div id="zipcodeSelect" class="form-row" style="margin-left: 0px; margin-right: 0px;"></div>
			</div>

			<script>
				$("#zipcodeSelect").twzipcode({
					countySel: "<?PHP echo    $row->city ?>", // 城市預設值 
					districtSel: "<?PHP echo    $row->town ?>", // 地區預設值
					zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
					css: [" city form-control col-6", "town col-6  form-control"], // 自訂 "城市"、"地區" class 名稱
					countyName: "city", // 自訂城市 select 標籤的 name 值
					districtName: "town" // 自訂地區 select 標籤的 name 值
				});
			</script>


			<div class="form-group">
				<label for="text3">街道地址</label>
				<input value="<?PHP echo    $row->address ?>" id="text3" name="address" type="text" class="form-control">
			</div>






			<div class="form-group">
				<label for="textarea">*特徵描述</label>
				<textarea id="textarea" name="appearance" cols="40" rows="5" class="form-control"><?PHP echo    $row->appearance ?></textarea>
			</div>
			<div class="form-group">
				<label for="textarea1">*遺失經過</label>
				<textarea id="textarea1" name="detail" cols="40" rows="5" class="form-control"><?PHP echo    $row->detail ?></textarea>
			</div>
			<div class="form-group">
				<label for="textarea2">聯繫方式</label>
				<textarea id="textarea2" name="contact" cols="40" rows="5" class="form-control"><?PHP echo    $row->contact ?></textarea>
			</div>
			<div class="form-group">
				<label for="text2">項目圖片</label>
				<input id="text2" name="upload" type="file" class="form-control">
			</div>
			<div class="form-group">
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