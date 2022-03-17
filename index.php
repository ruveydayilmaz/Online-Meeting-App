<?php
    include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>odev</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <link rel="stylesheet"  href="css/app.css">
  </head>
  <body>
    <div class="main">
        <div class="header js-header" id="header">
            <div class="header__center">
                <div class="logo-div">
                    <a href="#"><img class="logo" src="img/bao-mr-shiba-6.png"><h2 class="logo-name">ru meet</h2></a>                   
                </div>

                <div class="header__wrap js-header-wrap">
                    <nav class="header__nav">
                        <a class="header-item" href="#">Features</a>
                        <a class="header-item" href="#">Pricing</a>
                        <a class="header-item" href="#">Contact</a>  
                        <a href="logout.php"><li>Log Out</li></a>
                    </nav>
                </div>
            </div>
        </div>           
        <div class="col">
            <h2 class="title">website for<br>online meetings!</h2>
            <p>Lorem ipsum dolor sit amet consectetur Illo, est!</p>
            <a class="btn btn_yellow" onclick="mylinkfunction()" href="#targetDiv">let's go!</a>
        </div>
        <img class="header-pic" src="img/bao-girl-6.png">
    </div>

    <div class="main__center center">
        <div class="main__circles">
            <div class="main__circle"></div>
            <div class="main__circle js-rellax" data-rellax-speed="2"></div>
            <div class="main__circle js-rellax" data-rellax-speed="1"></div>
            <div class="main__circle js-rellax" data-rellax-speed="2"></div>
            <div class="main__circle js-rellax" data-rellax-speed=".3"></div>
            <div class="main__circle"></div>
            <img class="sakura" src="img/ikigai-video-conference.png">
        </div>
    </div>

    <a name="targetDiv"/ class="login-header">
        <div class="login-div" id="login-div">
            <img class="login-img" src="img/ikigai-workaholic-in-the-office.png">
            <div class="login-form">
                <h2 class="features__title title">login</h2>
                <div class="features__body">
                    <form id="login-form" form action="" method="post">
                        <input class="username" name="username" placeholder="username" id="username"><br>
                        <input class="password" type="password" name="password" placeholder="password" id="password"><br>
                        <a href="#">forgot password</a>
                        <input id="login-btn" class="btn submit" type="submit" name="submit" value="login">
                    </form>
                    <a class="signup" onclick="ShowSignUp()">don't have an account? sign up here</a>
                </div>
            </div>
        </div>
    </a>

    <div class="signup-div" id="signup-div">
        <img class="login-img" src="img/ikigai-workaholic-in-the-office.png">
        <div class="login-form">
            <h2 class="features__title title">sign up</h2>
            <div class="features__body">
                <form id="register-form" form action="" method="post">
                    <input class="username" name="username" placeholder="username" id="r-username"><br>
                    <input class="password" type="password" name="password" placeholder="password" id="r-password"><br>
                    <a class="signup" onclick="HideSignUp()">already have an account?</a>
                    <input id="register-btn" class="btn submit" type="submit" name="submit" value="sign up">
                </form>
            </div>
        </div>
    </div>

    <script src="ajax/user.js"></script> 
    <script src="js/app.js"></script>
  </body>
</html>
