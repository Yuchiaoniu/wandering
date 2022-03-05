<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>浪跡天涯 | 流浪救援</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function () {
			$("#navbar").load("navbar.html");//以ID找DOM，更改裡面的html
			$("#research").load("myscript/research.html");//以ID找DOM，更改裡面的html
			$("#rightspace").load("rightspace.html");//以ID找DOM，更改裡面的html    右側連結
			$("#footer").load("myscript/footer.html");//以ID找DOM，更改裡面的html
		});
	</script>
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
    require_once("dbtools.inc.php");

    
        $link = create_connection();
    $sql = "select * from rescue";
    $result = execute_sql($link, "wandering", $sql);
    

        // for(
        //     $i = 0;
        //     $i < mysqli_num_fields($result);
        //     $i++);

        while($row = mysqli_fetch_object($result))
    {
        echo '<div class="card mb-3" style="max-width: 800px;">';
									echo '<div class="row g-0">';
									echo	'<div class="col-md-4">';
                                    echo	'<a href="rescue_Detail_1.html">';
                                    echo		'<img src="';
                                    echo    $row->img; 
                                    echo    '" type="button" style="padding: 20px;height: auto; width: auto;"
                                            class="img-fluid rounded-start" alt="...">';
                                    echo	"</a>";
                                    echo"</div>";
                                    echo'<div class="col-md-8">';
                                    echo	'<div class="card-body">';
                                    
                                    echo		'<a href="./rescue_Detail_1.html">';
									echo				'<h5 class="card-title">';
                                    echo    $row->title; 
                                    echo                '</h5>';
                                    echo		'</a>';
                                    echo		        '<h4>';
                                    echo			'<div class="title">救援案件編號：';
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
                                    echo			'<a href="./rescue_Detail_1.html">詳細資訊</a>';
                                    echo		'</div>';

                                    echo	'</div>';
                                    echo'</div>';
									echo'</div>';
                                    echo'</div>';
    };
    mysqli_free_result($result);
    mysqli_close($link);
   

?>
								<!-- <div class="card mb-3" style="max-width: 800px;">
									<div class="row g-0">
										<div class="col-md-4">
											<a href="rescue_Detail_1.html">
												<img src=" type="button"
													style="padding: 20px;	; height: auto; width: auto;"
													class="img-fluid rounded-start" alt="...">
											</a>
										</div>
										<div class="col-md-8">
											<div class="card-body">

												<a href="./rescue_Detail_1.html">
													<h5 class="card-title"></h5>
												</a>
												<h4>
													<div class="title">救援案件編號：</div>
												</h4>
												<div class="datecreate mb-1">
													<h4 class="date-title">建立日期：</h4>
													<b class="card-text">
														動物類別： <br>
														動物數量：
													</b>
													<br>
													<a href="./rescue_Detail_1.html">詳細資訊</a>
												</div>

											</div>
										</div>
									</div>
								</div> -->
								<!-- 第一筆 -->
								<!-- 第二筆 -->
								<!-- <div class="card mb-3" style="max-width: 800px;">
									<div class="row g-0">
										<div class="col-md-4">
											<a href="rescue_Detail_2.html">
												<img src="/images/rescue2.png" type="button"
													style="padding: 20px;	; height: auto; width: auto;"
													class="img-fluid rounded-start" alt="...">
											</a>
										</div>
										<div class="col-md-8">
											<div class="card-body">

												<a href="/rescue_Detail_2.html">
													<h5 class="card-title">></h5>
												</a>
												<h4>
													<div class="title">救援案件編號： R164524968432</div>
												</h4>
												<div class="datecreate mb-1">
													<h4 class="date-title">建立日期：2022-02-19</h4>
													<b class="card-text">
														動物類別： 貓<br>
														動物數量： 1
													</b>
													<br>
													<a href="/rescue_Detail_2.html">詳細資訊</a>
												</div>

											</div>
										</div>
									</div>
								</div> -->
								<!-- 第二筆 -->
								<!-- 第三筆 -->
								<!-- <div class="card mb-3" style="max-width: 800px;">
									<div class="row g-0">
										<div class="col-md-4">
											<a href="rescue_Detail_3.html">
												<img src="/images/rescue3.png" type="button"
													style="padding: 20px;	; height: auto; width: auto;"
													class="img-fluid rounded-start" alt="...">
											</a>
										</div>
										<div class="col-md-8">
											<div class="card-body">

												<a href="/rescue_Detail_3.html">
													<h5 class="card-title">發現田間路旁有一隻狗，前腳好像被車撞，不知道是不是有點脫臼</h5>
												</a>
												<h4>
													<div class="title">救援案件編號： R164542077395</div>
												</h4>
												<div class="datecreate mb-1">
													<h4 class="date-title">建立日期：2022-02-18</h4>
													<b class="card-text">
														動物類別： 狗<br>
														動物數量： 1
													</b>
													<br>
													<a href="/rescue_Detail_3.html">詳細資訊</a>
												</div>

											</div>
										</div>
									</div>
								</div> -->
								<!-- 第三筆 -->
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
    
	

</body>

</html>