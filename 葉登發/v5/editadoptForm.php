<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>浪跡天涯</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!-- <script src="assets/js/main.js"></script> -->
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

<script type="text/javascript">
	function check_data()
	{
	  if (document.adoptForm.title.value.length == 0 | document.adoptForm.title.value.length > 255)
	  {	
		alert("「標題」一定要填寫或不可以超過 255 個字元");
		return false;
	  }
	  if (document.adoptForm.city.value.length == 0)
	  {
		alert("「城市」欄位忘了填哦");
		return false;
	  }
	  
	  if (document.adoptForm.nickname.value.length > 255 | document.adoptForm.nickname.value == 0)
	  {
		alert("「動物名稱」未填寫或者不可以超過 255 個哦");
		return false;
	  }
	  if (document.adoptForm.reason.value.length == 0)
	  {
		alert("請填寫送養原因");
		return false;
	  }	
	  if (document.adoptForm.status.value.length == 0)
	  {
		alert("請填寫醫療狀態欄位");
		return false;
	  }	
	  if (document.adoptForm.adoptcondition.value.length == 0)
	  {
		alert("請填寫領養條件欄位");
		return false;
	  }	
	//   if (document.adoptForm.upload.value.length == 0)
	//   {
	// 	alert("請協助上傳圖片");
	// 	return false;
	//   }	
	  
	  
	  adoptForm.submit();					
	}
  </script>		
  <?php
				//// 資料庫連線使用外部匯入
				require_once("dbtools.inc.php");
				$link = create_connection();    /// 設定連線的資料庫(外部匯入)
								
				$id = $_POST['rescueID'];
				/// 查詢指定資料庫結果

								
				//執行 SELECT 陳述式取得使用者資料
    			$sql = "SELECT * FROM adopt Where id = $id";
    			$result = execute_sql($link, "wandering", $sql);
				
								?>
								
				
</head>

<body>
<?php while ($row = mysqli_fetch_object($result)){ ?>
	<div id="page-wrapper">

		<!-- 匯入NAVBAR  -->
		<div id="navbar"></div>
		<script>
			$(document).ready(function () {
				$("#navbar").load("myscript/navbar.php");//以ID找DOM，更改裡面的html
			});
		</script>
		<!-- 匯入NAVBAR  END -->



		
		<!-- Main -->
		<h1 class="px-auto container ">修改送養資訊</h1>
		<br><br>
		
			
		<form name="adoptForm" action="editadoptFormcheck.php"  method="post" enctype="multipart/form-data"
		 style="background-color: rgba(220, 220, 220, 0.534)" class="px-auto container col-6">
			<div class="form-group">
				<label for="text">*送養標題</label>
				<input id="text" name="title" value="<?php echo $row->title?>" type="text" class="form-control">
			</div>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="select">*動物類別</label>
					<div>
						<select id="select" name="type" class="custom-select">
							<?php if ($row->type=="狗"){
								echo '<option selected="selected" value="狗">狗</option>';?>
								<?php }else{
									echo '<option value="狗">狗</option>';}?>
									<?php if ($row->type=="貓"){
							echo '<option selected="selected" value="貓">貓</option>';?>
							<?php }else{
									echo '<option value="貓">貓</option>';}?>
							
						</select>
					</div>
				</div>

				<div class="form-group col-md-8">
					<label for="zipcodeSelect">*地址 </label>
					<div id="zipcodeSelect" class="form-row" style="margin-left: 0px; margin-right: 0px;"></div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12" style="padding-top: 0; margin-top: 50px;">
					<label class="control-label col-form-label">
						<!-- <span class="text-danger">*</span>可送養縣市範圍 -->
						*可送養縣市範圍(不勾選則不限區域)
					</label>
					
					<div class="form-group">
					<?php
						$x = $row->adopt_city;
						if (strpos($x,'1') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="1"
								class="flat-blue">台北市</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="1"
									class="flat-blue">台北市</label>&nbsp;&nbsp;';}?>
					<?php
						if (strpos($x,'2') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="2"
								class="flat-blue">基隆市</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="2"
									class="flat-blue">基隆市</label>&nbsp;&nbsp;';}?>
					<?php	if (strpos($x,'3') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="3"
								class="flat-blue">新北市</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="3"
									class="flat-blue">新北市</label>&nbsp;&nbsp;';}?>
					<?php	if (strpos($x,'4') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="4"
								class="flat-blue">宜蘭縣</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="4"
									class="flat-blue">宜蘭縣</label>&nbsp;&nbsp;';}?>
					<?php	if (strpos($x,'5') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="5"
								class="flat-blue">新竹市</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="5"
									class="flat-blue">新竹市</label>&nbsp;&nbsp;';}?>
					<?php	if (strpos($x,'6') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="6"
								class="flat-blue">新竹縣</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="6"
									class="flat-blue">新竹縣</label>&nbsp;&nbsp;';}?>
					<?php	if (strpos($x,'7') !== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="7"
								class="flat-blue">桃園市</label>&nbsp;&nbsp;';?>
								<?php }else{
									echo '<label><input type="checkbox"  name="adopt_city[]" value="7"
									class="flat-blue">桃園市</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'8')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="8"
								class="flat-blue">苗栗縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="8"
									class="flat-blue">苗栗縣</label>&nbsp;&nbsp;';}?>
						

					<?php 	if (strpos($x,'9')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="9"
								class="flat-blue">台中市</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="9"
									class="flat-blue">台中市</label>&nbsp;&nbsp;';}?>

					<?php 	if (strpos($x,'10')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="10"
								class="flat-blue">彰化縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="10"
									class="flat-blue">彰化縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'11')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="11"
								class="flat-blue">南投縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="11"
									class="flat-blue">南投縣</label>&nbsp;&nbsp;';}?>

					<?php 	if (strpos($x,'12')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="12"
								class="flat-blue">雲林縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="12"
									class="flat-blue">雲林縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'13')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="13"
								class="flat-blue">嘉義市</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="13"
									class="flat-blue">嘉義市</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'14')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="14"
								class="flat-blue">嘉義縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="14"
									class="flat-blue">嘉義縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'15')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="15"
								class="flat-blue">台南市</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="15"
									class="flat-blue">台南市</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'16')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="16"
								class="flat-blue">高雄市</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="16"
									class="flat-blue">高雄市</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'17')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="17"
								class="flat-blue">南海諸島</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="17"
									class="flat-blue">南海諸島</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'18')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="18"
								class="flat-blue">澎湖縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="18"
									class="flat-blue">澎湖縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'19')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="19"
								class="flat-blue">屏東縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="19"
									class="flat-blue">屏東縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'20')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="20"
								class="flat-blue">台東縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="20"
									class="flat-blue">台東縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'21')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="21"
								class="flat-blue">花蓮縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="21"
									class="flat-blue">花蓮縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'22')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="22"
								class="flat-blue">金門縣</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="22"
									class="flat-blue">金門縣</label>&nbsp;&nbsp;';}?>
					<?php 	if (strpos($x,'23')!== false){
								echo '<label><input type="checkbox" checked name="adopt_city[]" value="23"
								class="flat-blue">連江縣(馬祖)</label>';?>
								<?php }else{
									echo '<label><input type="checkbox" name="adopt_city[]" value="23"
									class="flat-blue">連江縣(馬祖)</label>&nbsp;&nbsp;';}?>
						
								<label><input type="checkbox" name="adopt_city[]" value="全區"
									class="flat-blue" checked>全區</label>&nbsp;&nbsp;

								<label><input type="checkbox" name="id" value="<?php echo $id ?>"
									class="flat-blue" checked style="display:none"></label>&nbsp;&nbsp;
									
									
					</div>
				</div>
			</div>

			<script>
				$("#zipcodeSelect").twzipcode({
					countySel: "<?php echo $row->city?>", // 城市預設值 
					districtSel: "<?php echo $row->town?>", // 地區預設值
					zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
					css: [" city form-control col-6", "town   form-control col-6"], // 自訂 "城市"、"地區" class 名稱
					countyName: "city", // 自訂城市 select 標籤的 name 值
					districtName: "town" // 自訂地區 select 標籤的 name 值
				});
			</script>

			<div class="row">
				<div class="col-md-6" style="padding-top: 0; margin-top: 50px;">
					<label class="control-label col-form-label">
						*動物名稱
					</label>
					<div class="form-group">
						<input type="text" class="form-control radius-4" name="nickname" value="<?php echo $row->nickname?>">
					</div>
				</div>
				<div class="col-md-6" style="padding-top: 0; margin-top: 50px;">
					<label class="control-label col-form-label">
						*動物性別
					</label>
					<div class="form-group">
						<select class="form-control radius-4" name="gender" id="gender">
							
							
							<?php if ($row->gender=="男"){
								echo '<option selected="selected" value="男">男</option>';?>
								<?php }else{
									echo '<option value="男">男</option>';}?>
									<?php if ($row->gender=="女"){
							echo '<option selected="selected" value="女">女</option>';?>
							<?php }else{
									echo '<option value="女">女</option>';}?>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6" style="padding-top: 0; margin-top: 50px;">
					<label class="control-label col-form-label">
						*結紮狀態
					</label>
					<div class="form-group">
						<select class="form-control radius-4" name="ligation" id="fixed_status">
							
							
							<?php if ($row->ligation=="是"){
								echo '<option selected="selected" value="是">是</option>';?>
								<?php }else{
									echo '<option value="是">是</option>';}?>
									<?php if ($row->ligation=="否"){
							echo '<option selected="selected" value="否">否</option>';?>
							<?php }else{
									echo '<option value="否">否</option>';}?>
						</select>
					</div>
				</div>
				<div class="col-md-6 fixed_cut_ears" style="padding-top: 0; margin-top: 50px;">
					<label class="control-label col-form-label">
						*剪耳狀態
					</label>
					<div class="form-group">
						<select class="form-control radius-4" name="ear" id="fixed_cut_ears">
							<?php if ($row->ear=="是"){
								echo '<option selected="selected" value="是">是</option>';?>
								<?php }else{
									echo '<option value="是">是</option>';}?>
									<?php if ($row->ear=="否"){
							echo '<option selected="selected" value="否">否</option>';?>
							<?php }else{
									echo '<option value="否">否</option>';}?>
						</select>
					</div>
				</div>
				<!-- <div class="col-md-6 fixed_time" style="display: none;">
					<label class="control-label col-form-label">
						*預定結紮日
					</label>
					<div class="form-group">
						<input readonly="" type="text" class="form-control radius-4 dtpicker-date" name="fixed_time"
							value="">
					</div>
				</div> -->
			</div>

			<div class="form-group">
				<label for="textarea">*送養說明</label>
				<textarea id="textarea" name="reason" cols="40" rows="5" class="form-control"><?php echo $row->reason;?></textarea>
			</div>
			<div class="form-group">
				<label for="textarea1">*醫療狀態說明</label>
				<textarea id="textarea1" name="status" cols="40" rows="5" class="form-control"><?php echo $row->status?></textarea>
			</div>
			<div class="form-group">
				<label for="textarea2">*領養條件</label>
				<textarea id="textarea2" name="adoptcondition" cols="40" rows="5" class="form-control"><?php echo $row->adoptcondition?></textarea>
			</div>

			<div class="form-group">
				<label for="textarea2">*照片上傳</label>
				<div class="form-group row">
					<input type="file" name="upload">
					<!-- <div class="col-md-3 imgUp" style="max-width: 100%;">
						<div class="imagePreview">
							<img id="finalImg1" width="100%">
						</div>
						<label class="btn btn-green replaceImg" data-sid="1">
							更改圖檔(封面)
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
				<input class="btn btn-primary" type="button" onclick="check_data()" value="確認送出">
			</div>
		</form>
				<?php }?>

		<!-- Footer  -->
		<br/>
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




		<script>
			window.onload = function () {
				let user = getCookie("passed");
				if (user != "TRUE") {
					alert("本功能限定會員使用");
					document.location.href = "./adopt.php";
				}

			}
			function getCookie(cname) {   //檢查是否通過
				let name = cname + "=";
				let decodedCookie = decodeURIComponent(document.cookie);  //decodeURIComponent() 方法用於解碼由 encodeURIComponent 方法或者其它類似方法編碼的部分統一資源標識符（URI）。
				let ca = decodedCookie.split(';');  //split(';'):使用 ; 符號指定分割字串位置
				for (let i = 0; i < ca.length; i++) {
					let c = ca[i];
					while (c.charAt(0) == ' ') {  //charAt 可以用來取得字串中特定位置的字元。
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {  //indexOf() 方法會回傳給定元素於陣列中第一個被找到之索引，若不存在於陣列中則回傳 -1
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
		</script>



</body>

</html>