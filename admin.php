<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\home.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
                <a href="#"><li>Contact</li></a>
                <a href="logout.php"><li>Log Out</li></a>
            </ul>
        </div>

        <div class="col-8">
            <div class="row">
                <div class="col-8">
                    <h3>List Employers</h3>
                    <table id="emp-table" class="table table-hover">            
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Department</th>
                            <th></th>
                        </tr>
                    </table>                    
                </div>
                <div class="col-4">
                    <div style="float:right; width:50%;">
                    <h1>New</h1> 
                    <form id="apiform">

                        <input type="text" name="name" placeholder="name" autocomplete="on" ><br>
                        <input type="text" name="username" placeholder="username" autocomplete="on" ><br>
                        <input type="text" name="department" placeholder="department" autocomplete="on" ><br><br>

                        <button id="add_emp">Add</button>
                    </form>
                </div>

                </div>
            </div>
        </div>

    <script src="ajax/employee.js"></script> 
</body>
</html>