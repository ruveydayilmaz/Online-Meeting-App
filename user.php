<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odev</title>

    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://meet.jit.si/external_api.js'></script>
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
                <a href="#"><li>Chat</li></a>
                <a href="#"><li>Meetings</li></a>
                <a href="#"><li>Contacts</li></a>
                <a href="logout.php"><li>Log Out</li></a>
            </ul>
        </div>
        
        <div class="col-10">
            <div class="row">
                <div id="meet-btns">
                    <div class="col-2 transbox" id="start-div">
                        <button id="start" class="btn btn-light btn-lg" type="button" onclick="Show()"><i><img src="img/icons8-online-meeting-100.png"></i></button>
                        <h6>new meeting</h6>
                    </div>
                    <div class="col-2 transbox">
                        <button id="join" class="btn btn-light btn-lg" type="button" onclick="ShowJoinDiv()"><i><img src="img/icons8-join-100.png"></i></button>
                        <h6>join a meeting</h6>
                    </div> 
                </div>
                
                <div id="jitsi-container" class="container align-items-center"><button id="hide-btn" onclick="Hide()">kapat</button></div>

                <div id="join-container">
                    <form action="" method="post">
                        <input type="text" name="url" id="url" placeholder="enter the meeting url">
                        <input type="submit" value="go">
                    </form>
                    <button onclick="HideJoinDiv()">kapat</button>
                </div>

                <div>
                    <button id="chat-button" type="button"><img src="img/bao-board.png"></button>
                    <div id="textbox" >                    
                        <div id="chatbox-div" class="chat-container">
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                            </div>
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Ask something">
                                    <p></p>
                                </div>
                                <div class="chat-bar-icons">
                                    <i id="chat-icon" style="color: white;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                                </div>
                            </div>
                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>
                        </div>          
                    </div>
                </div>
            </div>      
        </div>   
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/responses.js"></script>
<script src="js/chat.js"></script>
<script src="js/create-meeting.js"></script>
<script src="js/join-meeting.js"></script>
</html>