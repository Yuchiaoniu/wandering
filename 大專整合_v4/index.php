<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>浪跡天涯 | 首頁</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/main.css" />
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/banner.css">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>

<body>

	<div id="page-wrapper">

		<!-- 匯入NAVBAR  -->
		<div id="navbar">
		</div>

		<!-- Banner 幻燈片 -->
		<div id="banner123">
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row main-row">


					<!-- 最新公佈欄 -->
					<div class="col-md-9 col-sm-12">

						<!-- 手風琴 -->
						<div id="tab-01" ></div>

					</div>
					<!-- 最新公佈欄  END-->

					<div class="col-md-3 col-sm-12 ">
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
		$(document).ready(function () {
			$("#navbar").load("./myscript/navbar.php");//以ID找DOM，更改裡面的html
			$("#banner123").load("./myscript/banner.php");//以ID找DOM，更改裡面的html
			$("#tab-01").load("./myscript/Tabs1remake.php");//以ID找DOM，更改裡面的html
			$("#rightspace").load("./myscript/rightspace.html");//以ID找DOM，更改裡面的html    右側連結
			$("#footer").load("./myscript/footer.html");//以ID找DOM，更改裡面的html
		});
	</script>

</body>

</html>