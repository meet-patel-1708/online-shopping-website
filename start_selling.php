<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Dancing+Script&family=Edu+SA+Beginner&family=Josefin+Sans&family=Jost:wght@500&family=Montserrat:wght@400;600&family=Victor+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
    <style>
        img{
            position: absolute;
            top: 5%;
            left: 20%;
            height: 60px;
            width: 60px;
        }
        h2{
            position: absolute;
            top: 12%;
            left: 20%;
            font-family: "Montserrat", sans-serif;
        }
        p{
            position: absolute;
            top: 19%;
            left: 20%;
            background-color: black;
            color: white;
            padding: 10px;
            font-family: "Montserrat", sans-serif;
        }
        .data{
            position: absolute;
            top: 10%;
            left: 33%;
            transform: translate(-50%,50%);
        }
        .data input{
            padding: 10px;
            margin: 5px 0px;
            width: 325px;
            height: 30px;
        }
        .data button[type="submit"]{
            position: absolute;
            top: 615px;
            background:none;
            padding: 10px;
            width: 350px;
            font-size: large;
            cursor: pointer;
        }
        .data button[type="submit"]:hover{
            background: black;
            color: white;
            transition: .5s;
        }
        .data ul {
            position: absolute;
            list-style: none; /* Remove default list bullets */
            margin-left: -10%;
            margin-top: 10%;
        }
        .data ul h6 {
            font-size: larger;
        }
        .data ul li {
            font-size: larger;
            margin: 10px 0; /* Add margin for spacing between list items */
        }
        hr.vertical{
            position: relative;
            margin-top: 10px;
            transform: rotate(90deg);
            top: 10%;
        }
        input[type="checkbox"]{
            position: absolute;
            top: 325px;
            left: 5%;
            width: 20px;
        }
        .data h5{
            position: absolute;
            top: 96%;
            left: 15%;
            font-size: 15px;
            font-family: "Montserrat", sans-serif;
        }
        h3{
            position: absolute;
            top: 10%;
            right: 15%;
            font-family: "Montserrat", sans-serif;
        }
        .container {
            position: relative;
            width: 100%;
            height: 100vh; /* Adjust this value based on your layout */
        }

        h4 {
            position: absolute;
            font-family: "Montserrat", sans-serif;
        }

        h4:nth-child(1) {
            top: 15%;
            left: 55%;
        }

        h4:nth-child(2) {
            top: 25%;
            left: 55%;
        }

        h4:nth-child(3) {
            top: 35%;
            left: 55%;
        }

        h4:nth-child(4) {
            top: 45%;
            left: 55%;
        }
        .btn{
            position: absolute;
            top: 2%;
            right: 10%;
            width: 150px;
            cursor: pointer;
            border-radius: 5px;
            background:none;
            padding: 10px;
            font-size: 15px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .btn:hover{
            background-color: black;
            color: white;
            transition: .5s;
        }
        .login-1{
            position: absolute;
            top: 0%;
            right: 20%;
            width: 225px;
            font-size: 15px;
            font-family:"Montserrat", sans-serif;

        }
    </style>
</head>
    <body>
        <div>
            <img src="megamart.png" alt="">
            <h2>Welcome to Megamart</h2>
            <p>Create Your Account To Become Supplier</p>
        </div>
        <div class="data">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Enter Your Name:"><br>
                <input type="number" name="mobile_number" placeholder="Enter Your Mobile Number:"><br>
                <input type="number" name="otp" placeholder="Enter OTP:"><br>
                <input type="email" name="email" placeholder="Enter Your Email:"><br>
                <input type="text" name="Password" placeholder="Enter Your Password:"><br>
                <button type="submit">Create Account</button>
            </form>
                <ul>
                    <h6>Make your password strong by adding:</h6>
                    <li>
                        Minimum 8 characters (letters & numbers)<br></li>
                        <li>Minimum 1 special character (@ # $ % ! ^ & *)<br></li>
                        <li>Minimum 1 capital letter (A-Z)<br></li>
                        <li>Minimum 1 number (0-9)<br></li>
                </ul>
                <input type="checkbox" name="" id=""><h5>I want to receive important updates on email</h5>
                
            
        </div>
        <hr class="vertical">
            <h3>Grow your business faster by selling on Meesho</h3>
            <div class="container">
                <h4 class="h4-1">1 Lakh+<br>Supplier are selling commission-free</h4>
                <h4 class="h4-2">24000+<br>Pincodes supported for delivery</h4>
                <h4 class="h4-3">Crore of Customers buy across India</h4>
                <h4 class="h4-4">700 +<br>Categories to selling</h4>
            </div>
            <div class="login">
                <h5 class="login-1"style="">
                    Already have an account?
                </h5>
            <form action="selling.php" method="post">
                <button type="submit" class="btn">LOGIN</button>
            </form>
            </div>
            
    </body>
</html>
    