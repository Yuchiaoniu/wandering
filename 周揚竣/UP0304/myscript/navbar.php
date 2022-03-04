<div id="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <header id="header">
                    <h1><a href="./index.php" id="logo">浪跡天涯</a></h1>
                    <nav id="nav">
                        <!-- <a href="./index.php" class="current-page-item">首頁</a>
                        <a href="./rescue.php">流浪救援</a>
                        <a href="./adopt.php">動物認養</a>
                        <a href="./stray.php">遺失協尋</a>
                        <a href="./about.php">關於我們</a>
                        <a href="./member.php">會員中心</a> -->

                    </nav>
                </header>

            </div>
        </div>
    </div>
</div>

<script>
    var thisurl = document.title.slice(-2);
    //console.log(thisurl);
    var urlarray = ["./index.php", "./rescue.php", "./adopt.php", "./stray.php", "./about.php", "./member.php"];
    var urlarray2 = ["首頁", "流浪救援", "動物認養", "遺失協尋", "關於我們", "會員中心"]
    //console.log(urlarray2[0]);



    for (i = 0; i < 6; i++) {
        if (thisurl == urlarray2[i].slice(-2)) {
            document.getElementById("nav").innerHTML =
                document.getElementById("nav").innerHTML + '<a href="' + urlarray[i] + '" class="current-page-item">' + urlarray2[i] + '</a>';
       }
         else {
           document.getElementById("nav").innerHTML = document.getElementById("nav").innerHTML + '<a href="' + urlarray[i] + '">' + urlarray2[i] + '</a>'; //     }

        }
    }
</script>


<!-- Scripts -->
<script src="./assets/js/browser.min.js"></script>
<script src="./assets/js/breakpoints.min.js"></script>
<script src="./assets/js/util.js"></script>
<script src="./assets/js/main.js"></script>