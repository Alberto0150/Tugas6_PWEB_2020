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
        <script>
            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                animationEnabled: true,
                zoomEnabled: true,
                title:{
                    text: "Pendapatan"
                },
                axisY: {
                    title: "Rupiah"
                },
                data: [{        
                    type: "column",  
                    showInLegend: true, 
                    legendMarkerColor: "grey",
                    legendText: "Jumlah",
                    dataPoints: [   
                        { y: 8089365, label: "1960" }, 
                        { y: 48730878, label: "1961" }, 
                        { y: 85092761, label: "1962" }, 
                        { y: 18236898, label: "1963" }, 
                        { y: 61747774, label: "1964" }, 
                        { y: 25238331, label: "1965" }, 
                        { y: 21485379, label: "1966" }, 
                        { y: 53160476, label: "1967" }, 
                        { y: 97716644, label: "1968" }, 
                        { y: 92041410, label: "1969" }, 
                        { y: 27402352, label: "1970" }, 
                        { y: 53290014, label: "1971" }, 
                        { y: 84968683, label: "1972" }, 
                        { y: 4920048, label: "1973" }, 
                        { y: 49097743, label: "1974" }, 
                        { y: 71513907, label: "1975" }, 
                        { y: 67980527, label: "1976" }, 
                        { y: 43583411, label: "1977" }, 
                        { y: 4889169, label: "1978" }, 
                        { y: 6255723, label: "1979" }, 
                        { y: 35205211, label: "1980" }, 
                        { y: 22795363, label: "1981" }, 
                        { y: 95302565, label: "1982" }, 
                        { y: 30556412, label: "1983" }, 
                        { y: 37265779, label: "1984" }, 
                        { y: 62821522, label: "1985" }, 
                        { y: 79322860, label: "1986" }, 
                        { y: 34265121, label: "1987" }, 
                        { y: 49574046, label: "1988" }, 
                        { y: 69703131, label: "1989" }, 
                        { y: 3913918, label: "1990" }, 
                        { y: 5779784, label: "1991" }, 
                        { y: 18434009, label: "1992" }, 
                        { y: 37123052, label: "1993" }, 
                        { y: 71933056, label: "1994" }, 
                        { y: 28298156, label: "1995" }, 
                        { y: 62161383, label: "1996" }, 
                        { y: 93218436, label: "1997" }, 
                        { y: 29575005, label: "1998" }, 
                        { y: 59878026, label: "1999" }, 
                        { y: 33576218, label: "2000" }, 
                        { y: 56777357, label: "2001" }, 
                        { y: 61284413, label: "2002" }, 
                        { y: 18544900, label: "2003" }, 
                        { y: 9813778, label: "2004" }, 
                        { y: 58498530, label: "2005" }, 
                        { y: 38175181, label: "2006" }, 
                        { y: 77594305, label: "2007" }, 
                        { y: 50198314, label: "2008" }, 
                        { y: 42864350, label: "2009" }, 
                        { y: 31966402, label: "2010" }, 
                        { y: 85203525, label: "2011" }, 
                        { y: 13776087, label: "2012" }, 
                        { y: 27268966, label: "2013" }, 
                        { y: 15759937, label: "2014" }, 
                        { y: 50841866, label: "2015" }, 
                        { y: 38206861, label: "2016" }, 
                        { y: 43199170, label: "2017" }, 
                        { y: 84906987, label: "2018" }, 
                        { y: 35897280, label: "2019" }
                    ]
                }]
            });
            chart.render();

            }
        </script>
    </header>
    <main>
        <?php 
        if (isset($_SESSION["sukses"]))
        {
            echo '<div class="toast toast-success">';
            echo '<button class="btn btn-clear float-right"></button>';
            echo $_SESSION["sukses"];
            echo '</div>';

            unset($_SESSION["sukses"]);
        }
        if (isset($_SESSION["gagal"]))
        {
            echo '<div class="toast toast-warning">';
            echo '<button class="btn btn-clear float-right"></button>';
            echo $_SESSION["gagal"];
            echo '</div>';

            unset($_SESSION["gagal"]);
        }
        ?>
        
        <div id="chartContainer" style="height: 370px; width:90%; margin: 0 auto ;">
        
        </div>
        <!-- <iframe src="dinamics.php" title="graph dinamis" style="width:100%; height:100%;"> -->

        
    </main>
    <a href="dinamics.php"> <button class="custom"> Ke halaman dinamis graph </button> </a>
    <div class="kembali">
        <a href="view.php"> <button class="custom"> Kembali ke halaman sebelumnya </button> </a>
    </div>

    
    <a href="backend/logout.php"><button class="custom">Logout</button></a>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
<?php
} else {
        ?> Anda tidak dapat mengakses halaman ini. silahkan kembali ke <a href="index.php"> Homepage </a> <?php
    } 
?> 