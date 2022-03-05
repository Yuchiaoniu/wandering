<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>


</head>

<body>

    <div id="tabs" ;>
        <ul>
            <li><a href="#tabs-1">流浪救援</a></li>
            <li><a href="#tabs-2">動物認養</a></li>
            <li><a href="#tabs-3">遺失協尋</a></li>
        </ul>
        <div id="tabs-1">
            <div id="cards1-1"></div>
        </div>
        <div id="tabs-2">
            <div id="cards1-2"></div>
        </div>
        <div id="tabs-3">
            <div id="cards1-3"></div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#cards1-1").load("./myscript/cards/cards1-1.php");//以ID找DOM，更改裡面的html
            $("#cards1-2").load("./myscript/cards/cards1-2.php");//以ID找DOM，更改裡面的html
            $("#cards1-3").load("./myscript/cards/cards1-3.php");//以ID找DOM，更改裡面的html
        });
    </script>
</body>

</html>