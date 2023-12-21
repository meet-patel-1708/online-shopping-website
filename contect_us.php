<?php
include 'dbconnect.php';
include 'insert_contact_us.php';

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    :root {
        --header-height: 3.5rem;

        /*========== Colors ==========*/
        /*Color mode HSL(hue, saturation, lightness)*/
        --black-color: hsl(220, 24%, 12%);
        --black-color-light: hsl(220, 24%, 15%);
        --black-color-lighten: hsl(220, 20%, 18%);
        --white-color: #fff;
        --body-color: hsl(220, 100%, 97%);

        /*========== Font and typography ==========*/
        /*.5rem = 8px | 1rem = 16px ...*/
        --body-font: "Montserrat", sans-serif;
        --normal-font-size: .938rem;

        /*========== Font weight ==========*/
        --font-regular: 400;
        --font-semi-bold: 600;

        /*========== z index ==========*/
        --z-tooltip: 10;
        --z-fixed: 100;
    }

    /*========== Responsive typography ==========*/
    @media screen and (min-width: 1024px) {
        :root {
            --normal-font-size: 1rem;
        }
    }

    /*=============== BASE ===============*/
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: var(--body-color);
        height: 50%;
    }

    .container {
        position: absolute;
    }

    .container img {
        position: absolute;
        display: block;
        width: 100%;
        height: 400px;
        z-index: -1;
    }

    .heading1 {
        position: absolute;
        left: 20%;
        color: white;
        font-family: 'Courier New', Courier, monospace;
    }

    .desc1 {
        color: white;
    }


    .container {
        display: flex;
        position: absolute;
        top: 0%;
        left: 0%;
        height: 300px;
        width: 100%;
    }

    .container h1 {
        position: relative;
        top: 20%;
        font-weight: 900;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .container p {
        position: relative;
        top: 40%;
        font-size: 20px;
    }


    .container-2 {
        background-color: var(--black-color-lighten);
        position: absolute;
        top: 850px;
        left: 0;
        width: 100%;
        height: 400px;
    }

    .container-2 h2 {
        position: absolute;
        left: 45%;
        top: 10%;
        color: white;
        font-family: var(--font-regular);
        font-size: 40px;
    }

    .container-2 p {
        position: absolute;
        top: 25%;
        left: 45%;
        font-size: 25px;
        color: white;
        font-family: var(--font-regular);
    }

    .card-1 {
        width: auto;
        position: absolute;
        top: 0%;
        flex-direction: row;
        right: 5%;
        margin: -50px 50px;
        display: flex;
        padding: 0 150px;
    }

    .card-container-1::after {
        content: "";
        display: table;
        clear: both;
    }

    .card-body-1 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        background-color: #f1f1f1;
        filter: drop-shadow(5px 5px 5px #fff);
        border-radius: 5px;
        margin: 10px;
    }

    .card-body-1 img {
        height: "auto";
        max-width: "none";
    }

    .card-body-1:hover {
        border-radius: 10px;
        animation: scale(0.7);
    }

    @media screen and (max-width: 600px) {
        .card-body-1 {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    .contact p {
        color: white;
        font-size: 20px;
        user-select: none;
    }

    .contact a {
        color: white;
        text-decoration: none;
        padding: 5px;
        justify-content: space-between;
    }

    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        justify-content: flex-end;
    }

    .card .card-body {
        width: 250px;
        height: 150px;
        border: 5px solid gray;
        border-radius: 10px;
        margin-top: 30%;
        margin-right: 5%;
    }

    .card-body i {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        margin: 15px;
        font-weight: var(--font-semi-bold);
    }

    .card-body p {
        text-align: center;
    }

    .card-body button {
        background: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        margin: 10px 70px;
    }

    .card-body button:hover {
        background-color: black;
        color: white;
        transition: .7s;
    }

    @media screen and (max-width: 600px) {
        .card-body {
            position: absolute;
            top: 50%;
        }
    }

    .data {
        position: absolute;
        top: 80%;
        left: 20%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .data input {
        display: block;
        margin: 5px;
        padding: 15px;
        font-size: 15px;
        border: none;
        width: 100%;
        border-bottom: 2px solid black;
        background: none;
    }

    .data button[type="submit"] {
        position: absolute;
        padding: 8px 49px;
        top: 250px;
        width: 200px;
        left: 5%;
        background: none;
        font-size: 20px;
    }

    .data button[type="submit"]:hover {
        background: #3DBD56;
        color: white;
        border-color: #3DBD56;
        font-size: 20px;
        transition: .3s;
    }
    .container-2 iframe{
        position: absolute;
        top: 0%;
        left: 5%;
        margin: -30px 50px;
        height: 200px;
        width: 400px;
        border-radius: 5px;
    }
    .container-2 h3{
        color:white;
        position: absolute;
        top: 50%;
        left: 8%;
        font-size: 22px;
        font-family: var(--body-font);
    }
    .container-2 h5{
        color:white;
        position: absolute;
        top: 65%;
        left: 7.5%;
        font-size: 22px;
        font-family: var(--body-font);
    }
    .container-2 .youtube{
        position: absolute;
        top: 50%;
        left: 45%;
        text-decoration: none;
        color: white;
        font-size: 30px;
    }
    .container-2 .instagram{
        position: absolute;
        top: 50%;
        left: 50%;
        text-decoration: none;
        color: white;
        font-size: 30px;
    }
    .container-2 .whatsapp{
        position: absolute;
        top: 50%;
        left: 55%;
        text-decoration: none;
        color: white;
        font-size: 30px;
    }
    </style>
</head>

<body>
    <div class="container">
        <img src="My_project.png">
        <h1 class="heading1">Contact us</h1>
        <p class="desc1">Stay updated with the latest trends, exclusive promotions, and exciting new arrivals by <br>subscribing to
            our newsletter.Be the first to know about upcoming sales and seasonal<br>discounts, ensuring you never miss
            a chance to save. Connect with us on social media<br> and join our vibrant community of satisfied customers.
            Share your purchases, reviews, <br>and recommendations, and be a part of the MegaMart family.</p>
    </div>
    <div class="data">
        <form action="" method="post">
            <input type="text" placeholder="Enter Your Name:" name="name" required><br>
            <input type="text" placeholder="Enter Your Email:" name="name" required><br>
            <input type="text" placeholder="Enter Mobile number:" name="contact_num" required><br>
            <button type="submit">Contact Us</button>
        </form>
    </div>
    <div class="card">
        <div class="card-body">
            <i class="ri-mail-send-line"></i>
            <p>meetpatel692020@gmail.com</p>
            <a href="mailto:meetpatel692020@gmail.com">
                <button type="submit">Contact Us</button>
            </a>
        </div>
        <div class="card-body">
            <i class="ri-whatsapp-line"></i>
            <p>+91 9426389817</p>
            <a href="https://www.instagram.com/meet_ptl_vlogs/">
                <button type="submit">Contact Us</button>
            </a>
        </div>
    </div>
    <div class="map">
    
    </div>
    <div class="container-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.6668900213954!2d72.99374881092888!3d21.637900280085567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be021547d94d855%3A0x8a3e1134008afacd!2sGajanand%20Society%2C%20Ramnagar%2C%20Ankleshwar%2C%20Gujarat%20393001!5e0!3m2!1sen!2sin!4v1696575114574!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h3><i class="ri-home-office-fill"></i>   Address: 106,Gajanand Society,OPP.Krupa <br>&nbsp;&nbsp;&nbsp;&nbsp;Nagar,Hasti Talav,Ankleshwar</h3>
        <h5><i class="ri-map-pin-line"></i>   Gujarat,India</h5>
        <h2>Prolocutor</h2>
        <div class="card-container-1">
            <div class="card-1">
                <div class="card-body-1">
                    <img src="meet.jpg" height="150" width="200">
                </div>
            </div>
            <p>Meet Patel.<br>BCA + MCA<br> Founder & CEO of MegaMart</p>
            <a href="https://www.youtube.com/channel/UCjb6TqzNQEPqrNmLIA2NxyA" class="youtube"><i class="ri-youtube-line"></i></a>
            <a href="https://www.instagram.com/meet_ptl_vlogs/" class="instagram"><i class="ri-instagram-line"></i></a>
            <a href="https://www.linkedin.com/in/meet-patel-2b19a4251/" class="whatsapp"><i class="ri-linkedin-line"></i></a>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>