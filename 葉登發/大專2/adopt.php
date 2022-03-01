<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>浪跡天涯 | 動物認養</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script> -->
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
				<h2>動物認養</h2>
				<div class="row main-row">

					<!-- 匯入RESEARCH -->
					<!-- 搜尋列 -->
					<div id="research" class="col-8"></div>

					<!-- 最新公佈欄 -->
					<div class=" col-md-9 col-sm-12">

						<section>

							<ul class="big-image-list">

								<div class="card mb-3" style="max-width: 800px;">
									<div class="row g-0">
										<div class="col-md-4" type="button">
											<a href="/adopt_Detail_1.html">
												<img src="/images/16.png" type="button"
													style="padding: 20px;	; height: auto; width: auto;"
													class="img-fluid rounded-start" alt="...">
											</a>
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<a href="/adopt_Detail_1.html">
													<h5 class="card-title">已領養</h5>
												</a>
												<h4>
													<div class="title">送養案件編號：A161599477347</div>
												</h4>
												<div class="datecreate mb-1">
													<h4 class="date-title">建立日期：2021-03-17</h4>

													<h4 class="date-title">結案日期：2021-06-04</h4>
													<b class="card-text">
														台中市南區，親人親狗的牛牛，在等一個幸褔的家
													</b>
													<br><br>
													<a href="/adopt_Detail_1.html">詳細資訊</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card mb-3" style="max-width: 800px;">
									<div class="row g-0">
										<div class="col-md-4">
											<a href="/adopt_Detail_2.html">
												<img src="/images/20.png" type="button"
													style="padding: 20px;	; height: auto; width: auto;"
													class="img-fluid rounded-start" alt="...">
											</a>
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<a href="/adopt_Detail_2.html">
													<h5 class="card-title">開放領養中</h5>
												</a>
												<h4>
													<div class="text-green">送養案件編號：A161163930565</div>
												</h4>
												<div class="datecreate mb-1">
													<h4 class="date-title">建立日期：2021-01-26</h4>

													<h4 class="date-title">結案日期：</h4>
													<b class="card-text">
														聰明的乖乖想要一個愛他的家
													</b>
													<br><br>
													<a href="/adopt_Detail_2.html"> 詳細資訊</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card mb-3" style="max-width: 800px;">
									<div class="row g-0">
										<div class="col-md-4">
											<a href="/adopt_Detail_3.html">
												<img src="/images/30.png" type="button"
													style="padding: 20px;	; height: auto; width: auto;"
													class="img-fluid rounded-start" alt="...">
											</a>
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<a href="/adopt_Detail_3.html">
													<h5 class="card-title">開放領養中</h5>
												</a>
												<h4>
													<div class="text-green">送養案件編號：A164508017812</div>
												</h4>
												<div class="datecreate mb-1">
													<h4 class="date-title">建立日期：2022-02-17</h4>

													<h4 class="date-title">結案日期：</h4>
													<b class="card-text">
														帥氣的茶凍想要一個溫暖的家
													</b>
													<br><br>
													<a href="/adopt_Detail_3.html">詳細資訊</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</ul>
						</section>
					</div>

					<!-- 最新公佈欄  END-->

					<div class="col-md-3 col-sm-12 ">
						<div class="btn btn-info mb-5 ">
							<a href="adoptForm.html">
								<h2 class="text-white">新增送養資訊</h2>
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
	  $(document).ready(function () {
            $("#navbar").load("./myscript/navbar.php");//以ID找DOM，更改裡面的html
            $("#footer").load("./myscript/footer.php");//以ID找DOM，更改裡面的html
            $("#memberMenu").load("./myscript/memberMenu.php");//以ID找DOM，更改裡面的html
        });
	</script>

</body>

</html>