<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sh0psy</title>
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
        background-color: var(--body-color);
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

    footer {
  position: absolute; /* Change to relative */
  background-color: var(--black-color);
  color: white;
  bottom: -300em;
  text-align: center;
  padding: 10px;
  width: 100%;
  min-height: 350px; /* Changed to min-height for responsive height */
}

footer p {
  position: relative; /* Change to relative */
  font-size: 30px;
  margin: 20px 10%; /* Adjust margin for responsive layout */
}

.link {
  position: relative; /* Change to relative */
  margin: 20px 5%; /* Adjust margin for responsive layout */
}

.link a {
  color: white;
  text-decoration: none;
  font-size: large;
  display: block; /* Display as block for spacing */
  margin-bottom: 10px; /* Add space between links */
}

.icons {
  position: relative; /* Change to relative */
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
    left: 50%; /* Adjust left position */
    transform: translateX(-50%); /* Center horizontally */
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
    top: 725em;
    height: 100%;
  }
}
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .container-1 {
        position: absolute;
        top: 550px;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 1200px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .container-1 h3{
        position: absolute;
        right: 7%;
        font-size: 40px;
    }
    .container-1 h5{
        position: absolute;
        right: 47%;
        font-size: 20px;
    }
    .container-1 p{
        position: absolute;
        right: 11%;
        font-size: 20px;
    }
    .container-1 img {
        max-width: 500px;
        height: 500px;
    }

    @media screen and (max-width: 600px) {
        .container-1 {
            position: absolute;
            left: 49%;
            width: 370px;
            height: 1050px;
            top: 100%;
        }

        .container-1 img {
            position: relative;
            width: 300px;
            height: 200px;
        }

        .small-img img {
            height: 70px;
            width: 100px;
        }

        .container-1 h3 {
            position: absolute;
            left: 5%;
            top: 300px;
        }

        .container-1 h5 {
            position: absolute;
            left: 5%;
            top: 425px;
        }

        .container-1 .desc {
            position: relative;
            top: 175px;
            left: 1%;
        }

        .container-1 h6 {
            position: relative;
            top: 200px;
            left: 2%;
        }

        .container-1 h4 {
            position: relative;
            width: 200px;
            top: 215px;
            left: 2%;
        }

        .container-1 hr {
            width: calc(100% - 40px);
            /* Adjust the width as needed */
            top: 55%;
            /* Adjust the position as needed */
            left: 5%;
        }

        .container-1 .brand p {
            position: relative;
            top: 250px;
            left: 5%;
        }

        .container-1 .button-container {
            position: relative;
            top: 17.5em;
            left: 5%;
        }

        .container-1 .button-container .add {
            position: absolute;
            top: 60px;
            left: 0%;
            width: 300px;
        }
    }

    .small-img {
        display: flex;
    }

    .small-img img {
        max-height: 150px;
        max-width: 150px;
        margin-right: 10px;
        transition: all 0.3s ease;
        /* Adding a transition for smooth resizing */
    }

    h3 {
        position: absolute;
        top: 2%;
        left: 45%;
        margin-top: 15px;
        font-size: 50px;
    }

    h5 {
        position: absolute;
        top: 12%;
        right: 48%;
        color: #e74c3c;
        font-size: 20px;
        margin: 10px 0;
    }

    .desc {
        position: absolute;
        top: 18%;
        right: 16%;
        font-size: 16px;
        line-height: 1.5;
    }

    hr {
        position: absolute;
        top: 45%;
        right: 3%;
        width: 52%;
        /* Adjust the width */
        border: none;
        border-top: 2px solid black;
    }

    h6 {
        position: absolute;
        top: 28%;
        right: 52%;
        font-size: 24px;
        margin: 0;
    }

    h4 {
        position: absolute;
        top: 35%;
        right: 39%;
        background: black;
        color: white;
        padding: 5px;
        font-size: 20px;
        margin-top: 10px;
    }

    .brand p {
        position: absolute;
        bottom: 40%;
        left: 45%;
        font-size: 16px;
        margin-top: 10px;
    }

    .button-container {
        position: absolute;
        bottom: 28%;
        right: 5%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .buy_now,
    .add {
        padding: 10px 20px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
    }

    .buy_now {
        background-color: orange;
        color: white;
        border: 2px solid orange;
        width: 300px;
    }

    .add {
        background-color: brown;
        color: white;
        border: 2px solid brown;
        width: 100%;
    }

    .container-2 {
    display: flex;
    flex-wrap: wrap; /* Enable wrapping to break into a new line when the screen size is small */
    justify-content: center;
    gap: 20px;
    padding: 20px;
    margin-top: 60%;
    background-color: #f0f0f0;
}

.product-info {
    flex: 1;
    max-width: 300px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.product-info img {
    max-width: 100%;
    height: 200px;
    margin-bottom: 10px;
}

.product-info p {
    font-size: 18px;
    margin: 10px 0;
}

.product-info .submit {
    background-color: orange;
    color: white;
    border: none;
    width: 250px;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

@media screen and (max-width: 768px) {
    .product-info {
        max-width: calc(50% - 20px); /* Display two cards per row on smaller screens */
    }
}

@media screen and (max-width: 480px) {
    .product-info {
        max-width: 100%; /* Display one card per row on even smaller screens */
    }
}

    </style>
</head>

<body>
    <!--=============== HEADER ===============-->
    <?php include 'nav.php'; 
        include 'dbconnect.php';
    ?>
    <!--=============== Body ===============-->
    <?php
    $id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE id = '$id';";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $p_name = $row['name'];
    $p_price = $row['price'];
    $p_rating = $row['rating'];
    $p_desc1 = $row['desc1'];
    $imageData1 = base64_encode($row['p1']);
    $imageTag1 = '<img src="data:image/png;base64,' . $imageData1 . '" alt="" id="mainImg" class="productImg img-fluid p-3 mb-5 rounded">';
    $imageData2 = base64_encode($row['p2']);
    $imageTag2 = '<img src="data:image/png;base64,' . $imageData2 . '" alt="" class="productImg img-fluid p-3 mb-5 rounded">';
    $imageData3 = base64_encode($row['p3']);
    $imageTag3 = '<img src="data:image/png;base64,' . $imageData3 . '" alt="" class="productImg img-fluid p-3 mb-5 rounded">';
    $imageData4 = base64_encode($row['p4']);
    $imageTag4 = '<img src="data:image/png;base64,' . $imageData4 . '" alt="" class="productImg img-fluid p-3 mb-5 rounded">';
} else {
    echo "not found";
}
?>
    <?php
// Your PHP code for fetching product data here...
?>

<div class="container-1">
    <form action="component.php" method="post">
        <img src="data:image/png;base64,<?php echo $imageData1; ?>" id="mainImg" class="productImg img-fluid p-3 mb-5 rounded">
        <div class="small-img">
            <img src="data:image/png;base64,<?php echo $imageData1; ?>" class="productImg img-fluid p-3 mb-5 rounded" onclick="changeMainImage('<?php echo $imageData1; ?>');">
            <img src="data:image/png;base64,<?php echo $imageData2; ?>" class="productImg img-fluid p-3 mb-5 rounded" onclick="changeMainImage('<?php echo $imageData2; ?>');">
            <img src="data:image/png;base64,<?php echo $imageData3; ?>" class="productImg img-fluid p-3 mb-5 rounded" onclick="changeMainImage('<?php echo $imageData3; ?>');">
            <img src="data:image/png;base64,<?php echo $imageData4; ?>" class="productImg img-fluid p-3 mb-5 rounded" onclick="changeMainImage('<?php echo $imageData4; ?>');">
        </div>
        <h3 name="title" style=""><b><?php echo $p_name; ?></b></h3>
        <h5 name="price"><?php echo $p_price; ?></h5>
        <p class="desc"><b>Product Code: </b>100723-SR1-KLM-BLK+YLW+MAJE-23983</p>
        <hr style="position: absolute; top: 25%;width: 52%;" class="hr">
        <h6><?php echo $p_rating; ?></h6>
        <h4>MegaMart's Choice</h4>
        <hr>
        <div class="brand">
            <p><?php echo $p_desc1; ?></p>
        </div>
        <div class="button-container">
        <a href="payment.php?id=<?php echo $row['id']; ?>" class="buy_now">Buy Now</a>
        <a href="add_cart.php?id=<?php echo $row['id']; ?>" class="add">Add To Cart</a>
        </div>
    </form>
</div>

<script>
    var mainImg = document.getElementById("mainImg");
    var productImg = document.getElementsByClassName("productImg");

    function changeMainImage(imageSrc) {
        mainImg.src = imageSrc;
    }

    for (var i = 0; i < productImg.length; i++) {
        productImg[i].addEventListener("click", function() {
            changeMainImage(this.src);
        });
    }   
</script>


    <!--=============== Other Product ===============-->

    <?php
    $sql = "SELECT id,p1, name, price FROM `products` LIMIT 8;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="container-2">'; // Start the container outside the loop
        while ($row = mysqli_fetch_assoc($result)) {
            // Decode the image data from the BLOB column
            $imageData = base64_encode($row['p1']);

            // Create an HTML image tag to display the image
            $imageTag = '<img height="200" width="200" style="position:relative;margin-left:10%;margin-top:2%;" src="data:image/png;base64,' . $imageData . '" alt="">';

            echo '
            <div class="product-info">
                "' . $imageTag . '"
                <p>' . $row['name'] . '<br>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['price'] . '/-</p>
                <form action="">
                    <button type="submit" class="submit">Shop</button>
                </form>
            </div>';
        }
        echo '</div>'; // End the container outside the loop
    }
?>

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