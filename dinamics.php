<?php session_start();
    if(isset($_SESSION['A_USERNAME']))
    {
        ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\main.css"/>
    <script>
    window.onload = function() {

    var dataPoints = [];

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        title: {
            text: "Live Data"
        },
        data: [{
            type: "line",
            dataPoints: dataPoints
        }]
    });
    updateData();

    // Initial Values
    var xValue = 0;
    var yValue = 10;
    var newDataCount = 6;

    function addData(data) {
        if(newDataCount != 1) {
            $.each(data, function(key, value) {
                dataPoints.push({x: value[0], y: parseInt(value[1])});
                xValue++;
                yValue = parseInt(value[1]);
            });
        } else {
            //dataPoints.shift();
            dataPoints.push({x: data[0][0], y: parseInt(data[0][1])});
            xValue++;
            yValue = parseInt(data[0][1]);
        }
        
        newDataCount = 1;
        chart.render();
        setTimeout(updateData, 1500);
    }

    function updateData() {
        $.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart="+xValue+"&ystart="+yValue+"&length="+newDataCount+"type=json", addData);
    }

    }
    </script>
</head>
<body>
    <header>
        <div id="section-a">
            <img src="image/gear.png">
        </div>

        <div id="section-b">
            <h1>
                Guest Book Bengkel Sukamaju
            </h1>
        </div> 
        
        <div id="section-c">
            <img src="image/gear.png">
        </div>
    </header>
    <div id="chartContainer" style="height: 370px; width: 90%; margin: 0 auto;"></div>
    
    <div class="kembali">
        <a href="income.php"> <button class="custom"> Kembali ke halaman graph income </button> </a>
    </div>
    <div class="kembali">
        <a href="view.php"> <button class="custom"> Kembali ke halaman tampilan database </button> </a>
    </div>
    <a href="backend/logout.php"><button class="custom">Logout</button></a>

    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</body>
</html>
<?php
} else {
        ?> Anda tidak dapat mengakses halaman ini. silahkan kembali ke <a href="index.php"> Homepage </a> <?php
    } 
?> 