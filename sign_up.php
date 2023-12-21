<?php

//index.php
 
//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
    $_SESSION['user_first_name'] = $data['given_name'];
    $_SESSION['user_last_name'] = $data['family_name'];
    $_SESSION['user_email_address'] = $data['email'];
    $_SESSION['user_image'] = $data['picture'];
 }
}


if (!isset($_SESSION['access_token'])) {
    $login_button = '<a href="'.$google_client->createAuthUrl().'" style="text-decoration: none;font-size: 20px;color: black;border: 2px solid gray;padding: 20px;border-radius: 10px;"><i class="ri-add-line"></i> <i class="ri-google-fill"></i> Login With Google</a>';
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap");

    body {
        background: linear-gradient(to right, #F23902, #0297F2);
        margin: 0;
        padding: 0;
    }

    @keyframes rotate {
        100% {
            transform: rotate(1turn);
        }
    }

    .container {
        position: absolute;
        z-index: 0;
        top: 40%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        height: 200px;
        border-radius: 10px;
        overflow: hidden;
        padding: 2rem;

        &::before {
            content: '';
            position: absolute;
            z-index: -2;
            left: -50%;
            top: -50%;
            width: 200%;
            height: 200%;
            background-color: #399953;
            background-repeat: no-repeat;
            background-size: 50% 50%, 50% 50%;
            background-position: 0 0, 100% 0, 100% 100%, 0 100%;
            background-image: linear-gradient(#399953, #399953), linear-gradient(#fbb300, #fbb300), linear-gradient(#d53e33, #d53e33), linear-gradient(#377af5, #377af5);
            animation: rotate 4s linear infinite;
        }

        &::after {
            content: '';
            position: absolute;
            z-index: -1;
            left: 6px;
            top: 6px;
            width: calc(100% - 12px);
            height: calc(100% - 12px);
            background: white;
            border-radius: 5px;
            animation: opacityChange 3s infinite alternate;
        }
    }

    @keyframes opacityChange {
        50% {
            opacity: 1;
        }

        100% {
            opacity: .5;
        }
    }
    @media screen and (max-width: 600px){
        .container{
            position: relative;
            width: 250px;
            top: 50%;
        }
    }
    h2 {
        color: #f23902;
        font-size: 30px;
        font-family: "Montserrat", sans-serif;
    }
    </style>
</head>

<body>
    <div class="container">
        <br />
        <h2 align="center">Login</h2>
        <br />
        <div class="panel panel-default">
            <?php
            // Check if $login_button is set and not empty
            if (isset($login_button) && $login_button != '') {
                echo '<div align="center">'.$login_button . '</div>';
            } else {
                // User is logged in, show your content here
                echo '<div align="center">Welcome, user!</div>';
            }
            ?>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>