<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-2 dashboard">
            <a href="index.php">
                <div class="logo-div">
                    <img class="dash-logo" src="img/bao-mr-shiba-6.png"><h2 class="dash-logo-name">ru meet</h2>                  
                </div>
            </a>
            <ul class="dashaboard-list">
                <a href="#"><li>Home</li></a>
                <a href="#"><li>List Users</li></a>
                <a href="#"><li>Contact</li></a>
            </ul>
        </div>

        <div class="col-8">
            <h3>Charts</h3>
            <div class="row">
                <div class="col-6">
                    <canvas id="line-chart"></canvas>                    
                </div>
                <div class="col-6">
                    <canvas id="pie-chart"></canvas>                    
                </div>
            </div>



        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/chart.js"></script>
</body>
</html>