<?php session_start();
    if(isset($_SESSION['A_USERNAME']))
    {
        ?>
<!DOCTYPE html>
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
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/total?country=Indonesia",
        "method": "GET",
        "headers": {
            "x-rapidapi-key": "c20948eb7fmsh8a47a46937f7666p1f6903jsn000afa85e8e5",
            "x-rapidapi-host": "covid-19-coronavirus-statistics.p.rapidapi.com"
        }
    };

    var options = {
        title: {
            text: "Data Covid Di Indonesia"
        },
        axisY: {
            includeZero: true
        },
        data: [{
            type: "column",
            yValueFormatString: "#,###",
            indexLabel: "{y}",
            color: "#546BC1",
            dataPoints: [
                { label: "Recovered", y: 0 },
                { label: "Deaths", y: 0 },
                { label: "Confirmed", y: 0 }
            ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);

    var input;
    var value;  
    var data ;
      
    $.ajax(settings).done(function (response) {
        
        input = response["data"];
        value = Object.values(input);
        updateChart(value);
    });

    console.log(value);
    function updateChart() {
        var performance, deltaY, yVal;
        var dps = options.data[0].dataPoints;
        for (var i = 0; i < dps.length; i++) {
            
            yVal = value[i];
            dps[i].y = yVal;
        }
        options.data[0].dataPoints = dps;
        $("#chartContainer").CanvasJSChart().render();
    };
    updateChart();

    setInterval(function () { updateChart() }, 1500);

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