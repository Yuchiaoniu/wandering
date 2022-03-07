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
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css" />

	<script src="assets/js/jquery.min.js"></script>

</head>

<body>


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
		<div id="main">
			<div class="container">
				<div class="row main-row">




					<!-- 點進後的救援詳細資料 -->
					<div class="col-9 col-12-medium">

						<section>
							<h2> 南投草屯受傷的流浪狗</h2>

							<ul class="big-image-list">
								<li>
									<a href="#"><img src="images/rescue1.png" alt="" class="left"
											style="height: 50%; width:50%;float: left; margin: 10px;"></a>
									<h2>
										救援案件編號： R164534225182
										<br>
										建立日期：2022-02-20
									</h2>

									動物類別：<span class="label label-info">狗</span>
									<br><br>
									動物數量： 1 <br><br>

									縣市鄉鎮區：<span class="label label-info">南投縣</span>
									<br><br>
									南投縣草屯鎮柏霖水電附近（南投縣草屯鎮中正路233號）
									<br><br>
									救援需求： 傷病就醫 尋求安置協助
									<br><br>
									通報人可負擔事項： 無法負擔任何事項
									<br>

								</li>

							</ul>
						</section>

						<hr>

						<div>
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										詳細資料
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									在朋友家附近流浪一個多禮拜了，尾巴有很深的傷口，疑似被別人惡意攻擊，很瘦、很親人不會亂叫，天氣很冷，狗狗濕淋淋在外面流浪，希望有人可以趕快過去救援，協助安置！
								</div>
							</div>
						</div>

						<script type="text/javascript">

							$(function () { $('#collapseThree').collapse('toggle') });

						</script>


						<hr>
						<div>
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
										救援原因
									</a>
								</h4>
							</div>
							<div id="collapsefour" class="panel-collapse collapse">
								<div class="panel-body">
									發現時狗狗已經瘦弱見骨，後腿明顯受傷行動不便，急需救援；脖子上有綠色項圈，項圈和身體都不是很髒，
									應該走失或被遺棄不久；附近大型野狗群聚很多，我擔心他有危險

								</div>
							</div>
						</div>

						<script type="text/javascript">

							$(function () { $('#collapsefour').collapse('toggle') });

						</script>

						<br><br>

						<div id="fb-root"></div>

						<script async defer crossorigin="anonymous"
							src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v13.0"
							nonce="Xzl1gX6Y"></script>

						<div class="fb-comments" data-href="http://127.0.0.1:5500/rescue_Detail_1.html" data-width=""
							data-numposts="10"></div>



					</div>
					<!-- 點進後的救援詳細資料  END-->

					<div class="col-3 col-12-medium">
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
			$("#navbar").load("myscript/navbar.html");//以ID找DOM，更改裡面的html
			$("#research").load("myscript/research.html");//以ID找DOM，更改裡面的html
			$("#rightspace").load("myscript/rightspace.html");//以ID找DOM，更改裡面的html    右側連結
			$("#footer").load("myscript/footer.html");//以ID找DOM，更改裡面的html
		});
	</script>



</body>

</html>