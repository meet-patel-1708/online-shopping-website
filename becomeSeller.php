<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>MegaMart</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap");

    /*=============== VARIABLES CSS ===============*/
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
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    ul {
        list-style: none;
        /* Color highlighting when pressed on mobile devices */
        /*-webkit-tap-highlight-color: transparent;*/
    }

    a {
        text-decoration: none;
    }

    /*=============== REUSABLE CSS CLASSES ===============*/
    .container {
        max-width: 1120px;
        margin-inline: 1.5rem;
    }

    /*=============== HEADER ===============*/
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: var(--black-color);
        box-shadow: 0 2px 16px hsla(220, 32%, 8%, .3);
        z-index: var(--z-fixed);
    }

    /*=============== NAV ===============*/
    .nav {
        height: var(--header-height);
    }

    .nav__logo,
    .nav__burger,
    .nav__close {
        color: var(--white-color);
    }

    .nav__data {
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav__logo {
        display: inline-flex;
        align-items: center;
        column-gap: .25rem;
        font-weight: var(--font-semi-bold);
        /* Color highlighting when pressed on mobile devices */
        /*-webkit-tap-highlight-color: transparent;*/
    }

    .nav__logo i {
        font-weight: initial;
        font-size: 1.25rem;
    }

    .nav__toggle {
        position: relative;
        width: 32px;
        height: 32px;
    }

    .nav__burger,
    .nav__close {
        position: absolute;
        width: max-content;
        height: max-content;
        inset: 0;
        margin: auto;
        font-size: 1.25rem;
        cursor: pointer;
        transition: opacity .1s, transform .4s;
    }

    .nav__close {
        opacity: 0;
    }

    /* Navigation for mobile devices */
    @media screen and (max-width: 1118px) {
        .nav__menu {
            position: absolute;
            left: 0;
            top: 2.5rem;
            width: 100%;
            height: calc(100vh - 3.5rem);
            overflow: auto;
            pointer-events: none;
            opacity: 0;
            transition: top .4s, opacity .3s;
        }

        .nav__menu::-webkit-scrollbar {
            width: 0;
        }

        .nav__list {
            background-color: var(--black-color);
            padding-top: 1rem;
        }
    }

    .nav__link {
        color: var(--white-color);
        background-color: var(--black-color);
        font-weight: var(--font-semi-bold);
        padding: 1.25rem 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background-color .3s;
    }

    .nav__link:hover {
        background-color: rgb(111, 108, 108);
    }

    /* Show menu */
    .show-menu {
        opacity: 1;
        top: 3.5rem;
        pointer-events: initial;
    }

    /* Show icon */
    .show-icon .nav__burger {
        opacity: 0;
        transform: rotate(90deg);
    }

    .show-icon .nav__close {
        opacity: 1;
        transform: rotate(90deg);
    }

    /*=============== DROPDOWN ===============*/
    .dropdown__item {
        cursor: pointer;
    }

    .dropdown__arrow {
        font-size: 1.25rem;
        font-weight: initial;
        transition: transform .4s;
    }

    .dropdown__link,
    .dropdown__sublink {
        padding: 1.25rem 1.25rem 1.25rem 2.5rem;
        color: var(--white-color);
        background-color: var(--black-color-light);
        display: flex;
        align-items: center;
        column-gap: .5rem;
        font-weight: var(--font-semi-bold);
        transition: background-color .3s;
    }

    .dropdown__link i,
    .dropdown__sublink i {
        font-size: 1.25rem;
        font-weight: initial;
    }

    .dropdown__link:hover,
    .dropdown__sublink:hover {
        background-color: var(--black-color);
    }

    .dropdown__menu,
    .dropdown__submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height .4s ease-out;
    }

    /* Show dropdown menu & submenu */
    .dropdown__item:hover .dropdown__menu,
    .dropdown__subitem:hover>.dropdown__submenu {
        max-height: 1000px;
        transition: max-height .4s ease-in;
    }

    /* Rotate dropdown icon */
    .dropdown__item:hover .dropdown__arrow {
        transform: rotate(180deg);
    }

    /*=============== DROPDOWN SUBMENU ===============*/
    .dropdown__add {
        margin-left: auto;
    }

    .dropdown__sublink {
        background-color: var(--black-color-lighten);
    }

    /*=============== BREAKPOINTS ===============*/
    /* For small devices */
    @media screen and (max-width: 340px) {
        .container {
            margin-inline: 1rem;
        }

        .nav__link {
            padding-inline: 1rem;
        }
    }

    /* For large devices */
    @media screen and (min-width: 1118px) {
        .container {
            margin-inline: auto;
        }

        .nav {
            height: calc(var(--header-height) + 2rem);
            display: flex;
            justify-content: space-between;
        }

        .nav__toggle {
            display: none;
        }

        .nav__list {
            height: 100%;
            display: flex;
            column-gap: 3rem;
        }

        .nav__link {
            height: 100%;
            padding: 0;
            justify-content: initial;
            column-gap: .25rem;
        }

        .nav__link:hover {
            background-color: transparent;
        }

        .dropdown__item,
        .dropdown__subitem {
            position: relative;
        }

        .dropdown__menu,
        .dropdown__submenu {
            max-height: initial;
            overflow: initial;
            position: absolute;
            left: 0;
            top: 6rem;
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s, top .3s;
        }

        .dropdown__link,
        .dropdown__sublink {
            padding-inline: 1rem 3.5rem;
        }

        .dropdown__subitem .dropdown__link {
            padding-inline: 1rem;
        }

        .dropdown__submenu {
            position: absolute;
            left: 100%;
            top: .5rem;
        }

        /* Show dropdown menu */
        .dropdown__item:hover .dropdown__menu {
            opacity: 1;
            top: 5.5rem;
            pointer-events: initial;
            transition: top .3s;
        }

        /* Show dropdown submenu */
        .dropdown__subitem:hover>.dropdown__submenu {
            opacity: 1;
            top: 0;
            pointer-events: initial;
            transition: top .3s;
        }
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
        width: 100%;
        max-width: 700px;
        position: relative;
        margin-top: 40%;
        margin-left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        padding: 0 20px;
    }

    .card-container::after {
        content: "";
        display: table;
        clear: both;
    }

    .card-body {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        background-color: white;
        margin: 10px 0px; 
    }

    .card-body h5 {
        color: #4876ff;
        font-size: 20px;
        margin: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card-body p {
        margin: 10px 0px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 900;
    }

    @media screen and (max-width: 600px) {
        .card {
            position: relative;
            margin-top: 600px;
            margin-left: 50%;
            padding: 0px 10px;
        }

        .card-body {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    .dicp {
        position: absolute;
        top: 850px;
        left: 10%;
    }

    .dicp h4 {
        font-size: 25px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: brown;
        font-weight: 900;
    }

    .dicp p {
        font-size: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    @media screen and (max-width: 600px) {

        .dicp h4,
        p {
            position: relative;
            width: 250px;
            margin-left: 20%;
        }
    }

    .disc {
        background-color: white;
        padding: 15px 15px;
        width: 425px;
        height: 290px;
        border: 1px solid black;
        border-radius: 5px;
        position: absolute;
        top: 850px;
        right: 10%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .disc h4 {
        font-size: 20px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 5px;
    }

    .disc p {
        font-size: 15px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    @media screen and (max-width: 600px) {
        .disc {
            position: relative;
            height: 400px;
            top: 50px;
            left: 7%;
            width: 350px;
        }
    }

    .container-1 {
        position: absolute;
        top: 1200px;
        width: 100%;
        height: 200px;
        background: white;
    }

    .container-1 h2 {
        padding: 50px 50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 30px;
    }

    .card-container-1 {
        display: flex;
        justify-content: space-between;
    }

    .card-1 {
        width: auto;
        position: absolute;
        top: 0%;
        flex-direction: row;
        right: 5%;
        margin: 0 -5px;
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
        border-radius: 5px;
        margin: 10px;
    }

    .card-body-1 h5 {
        color: #4876ff;
        font-size: 20px;
        margin: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card-body-1 p {
        margin: 10px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 900;
    }

    @media screen and (max-width: 600px) {
        .container-1 {
            position: absolute;
            top: 1550px;
            height: 500px;
        }

        .container-1 h2 {
            padding: 50px;
            font-size: 25px;
        }

        .card-body-1 {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin: 30% 7%;
        }
    }

    .container-2 {
        position: absolute;
        top: 1450px;
        width: auto;
        height: auto;
        left: 20%;
        border-radius: 10px;
        background-color: white;
    }

    .container-2 h3 {
        text-align: center;
        color: #FF0000;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 30px;
    }

    .container-2 p {
        display: inline-flex;
        margin: 0px 5px;
        padding: 10px;
        font-weight: 800;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    @media screen and (max-width: 600px) {
        .container-2 {
            position: absolute;
            top: 2075px;
            left: 10%;
            width: 80%;
        }
    }

    footer {
        position: absolute;
        /* Change to relative */
        background-color: var(--black-color);
        color: white;
        bottom: -100em;
        text-align: center;
        padding: 10px;
        width: 100%;
        min-height: 350px;
        /* Changed to min-height for responsive height */
    }

    footer p {
        position: relative;
        /* Change to relative */
        font-size: 30px;
        margin: 20px 10%;
        /* Adjust margin for responsive layout */
    }

    .link {
        position: relative;
        /* Change to relative */
        margin: 20px 5%;
        /* Adjust margin for responsive layout */
    }

    .link a {
        color: white;
        text-decoration: none;
        font-size: large;
        display: block;
        /* Display as block for spacing */
        margin-bottom: 10px;
        /* Add space between links */
    }

    .icons {
        position: relative;
        /* Change to relative */
        text-align: center;
    }

    .icons h6 {
        font-size: 30px;
        padding: 10px;
    }

    .icons i {
        font-size: 30px;
        color: white;
    }

    footer button[type="submit"] {
        position: relative;
        background: none;
        left: 50%;
        /* Adjust left position */
        transform: translateX(-50%);
        /* Center horizontally */
        color: white;
        padding: 10px;
        font-size: large;
        border: 2px solid white;
        cursor: pointer;
        border-radius: 10px;
        display: block;
        margin-top: 15px;
    }

    footer button[type="submit"]:hover {
        box-shadow: 0 0 10px 0 #fff inset, 0 0 20px 2px #fff;
        border: 3px solid #fff;
        color: #fff;
    }

    /* Media query for responsiveness */
    @media (max-width: 768px) {
        footer {
            position: absolute;
            top: 2650px;
            height: 100%;
        }
        footer p{
            margin-left: 20%;
        }
    }

    .image-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: absolute;
        top: 20%;
        gap: 10px;
    }
    </style>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                <img src="megamart.png" height="50" width="60"> Megamart
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="home1.php" class="nav__link">Home</a></li>

                    <li><a href="becomeSeller.php" class="nav__link">BECOME SELLER</a></li>

                    <li><a href="contect_us.php" class="nav__link">CONTACT US</a></li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <?php if(isset($_SESSION['access_token'])) { ?>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <img src="<?php echo $_SESSION['user_image']; ?>" alt="Profile Image" height="50"
                                        width="50" style="border: 2px solid white;border-radius:50%;">
                                    <?php echo $_SESSION['user_first_name']; ?>
                                </a>
                            <li>
                                <a href="logout.php"
                                    style="display: block; text-decoration: none; color: white; background-color: var(--black-color); font-size: 20px; border: none; padding: 10px 15px; width: 100%;">
                                    <i class="ri-logout-box-r-line"></i> Logout
                                </a>
                            </li>

                    </li>
                    <?php } else { ?>
                    <li>
                        <a href="sign_up.php" class="dropdown__link">
                            <i class="ri-user-line"></i> Signin
                        </a>
                    </li>
                    <?php } ?>

                    <li>
                        <a href="#" class="dropdown__link">
                            <i class="ri-lock-line"></i> Accounts
                        </a>
                    </li>

                    <li>
                        <a href="start_selling.php" class="dropdown__link">
                            <i class="ri-shopping-cart-2-fill"></i> START SELLING
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="img">
        <img src="business.jpg" height="470" style="position:absolute;top:12%;" width="100%" alt="">
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-body">
                <h5>11 Lakh+</h5>
                <p>Trust MegaMart to sell<br>Online</p>
            </div>

            <div class="card-body">
                <h5>14 Crore+</h5>
                <p>Customer Buying <br>Across india</p>
            </div>

            <div class="card-body">
                <h5>700+</h5>
                <p>Categories To sell<br>Online</p>
            </div>
        </div>
    </div>
    <!--=============== DISCRIPTION ===============-->
    <div class="dicp">
        <h4>Why Suppliers Love MegaMart</h4>
        <p>All the benefits that come with selling on MegaMart are<br>Designed to help you sell more, and Make it easier
            to grow<br>your business</p>
    </div>
    <!--=============== DISCRIPTION-2 ===============-->
    <div class="disc">
        <h4>0% Commission Fee</h4>
        <p>Supplier selling on Megamart Keep 100% of their profit <br>but not paying any commision</p>
        <hr>
        <h4>0 Panlty Charge</h4>
        <p>Sell online without the fear of order cancellation charge <br>with 0 panlty for late dispatch or order
            cancellation.</p>
        <hr>
        <h4>Growth For Every Supplier</h4>
        <p>From Small to large and unbranded to branded, all <br>supplier have grown their businesses on MegaMart</p>
    </div>
    <!--=============== DISCRIPTION 3 ===============-->

    <div class="container-1">
        <h2>Exclusive Supplier + Rewards<br>for the first 30days</h2>
        <div class="card-container-1">
            <div class="card-1">
                <div class="card-body-1">
                    <h5>Free Catlog visibility of 1200 Rs.</h5>
                    <p>Run advertisement for your<br>catalogs to increase the visibilty<br>of your products and get
                        more<br>orderOnline</p>
                </div>

                <div class="card-body-1">
                    <h5>Dadicated Catalog Manager</h5>
                    <p>Clear All your cataloging doubts<br>like how to upload catalogs,<br>correct quality check error
                        and<br>more</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-2">
        <h3>How It Works</h3>
        <p>Create Account<br>All You need in:<br>GSTIN<br>Bank Account</p>
        <p>List Product<br>List The product you<br>want to sell in your<br>supplier panel</p>
        <p>Get Orders:<br>Start Getting orders from<br>Crores of indians actively<br>Shopping on your<br>platform</p>
        <p>Lowest Cost Shipping:<br>products are shipped to<br>Customers at lowest<br>Coasts</p>
        <p>Receive Payment:<br>Payments are deposite<br>Directly to your bank<br>account following a 7d<br>payment cycle
            from<br>order delivery</p>
    </div>
    <!--=============== FOOTER ===============-->
    <footer>
        &copy;SHOP NON-STOP ON MEESHO
        <p>Trusted by more than 1 Crore Indians<br>
            Cash on Delivery | Free Delivery
        <div class="link">
            <a href="#">Careers</a><br>
            <a href="becomeSeller.php">Become A Seller</a><br>
            <a href="Privacy_Policy.php">Privacy Policy</a><br>
            <a href="trem_condition.php">Terms and Conditions</a><br>
        </div>
        <div class="icons">
            <h6>Reach Out Us</h6>
            <a href="https://www.instagram.com/meet_ptl_vlogs/"><i class="ri-instagram-line"></i></a>
            <a href="https://www.youtube.com/channel/UCjb6TqzNQEPqrNmLIA2NxyA"><i class="ri-youtube-line"></i></a>
            <a href="https://www.linkedin.com/in/meet-patel-2b19a4251/"><i class="ri-linkedin-box-fill"></i></a>
            <a href=""><i class="ri-facebook-circle-fill"></i></a>
        </div>
        <form action="contect_us.php">
            <button type="submit">CONTACT US</button>
            </from>
    </footer>
    <!--=============== MAIN JS ===============-->
    <script src="main.js"></script>
</body>

</html>