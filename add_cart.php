<?php include 'config.php';
include 'dbconnect.php';
?>
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

    .container-1 {
        position: absolute;
        top: 25%;
        left: 10%;
        background-color: white;
        filter: drop-shadow(3px 3px 3px #000);
        padding: 10px;
        height: 250px;
        width: 50%;
        border-radius: 5px;
    }

    .container-1 img {
        width: 25%;
    }

    .container-1 h2 {
        position: absolute;
        top: 5%;
        left: 30%;
        font-weight: 500;
    }

    .container-1 h5 {
        position: absolute;
        top: 25%;
        left: 30%;
        font-weight: 900;
        font-size: 15px;
    }

    .container-1 h3 {
        position: absolute;
        top: 40%;
        left: 37%;
        background: white;
        width: 10%;
        padding: 5px;
        text-align: center;
        border-radius: 5px;
        border: 1px solid black;
    }

    .container-1 .add {
        position: absolute;
        top: 40%;
        left: 30%;
        width: 5%;
        background: #CECDCB;
        color: black;
        font-size: 25px;
        border-radius: 50%;
        border: #CECDCB;
        cursor: pointer;
    }

    .container-1 .minus {
        position: absolute;
        top: 40%;
        right: 45%;
        width: 5%;
        background: #CECDCB;
        color: black;
        font-size: 25px;
        border-radius: 50%;
        border: #CECDCB;
        cursor: pointer;
    }

    .container-1 p {
        position: absolute;
        top: 45%;
        left: 30%;
    }

    a[name="buynnow"] {
        background: #E3AC00 !important;
        padding: 10px;
        position: absolute;
        left: 30%;
        top: 60%;
        color: white;
        border-radius: 5px;
        font-size: 15px;
        font-weight: 900;
        cursor: pointer;
    }

    a[name="remove"] {
        background: red !important;
        position: absolute;
        left: 45%;
        top: 60%;
        padding: 10px;
        color: white;
        border-radius: 5px;
        font-size: 15px;
        border: white;
        font-weight: 900;
        cursor: pointer;
    }

    .container-1 .price {
        position: absolute;
        top: 40%;
        font-size: 15px;
    }

    .container-1 .name {
        position: absolute;
        top: 15%;
        font-size: 15px;
    }

    @media screen and (max-width: 600px) {
        .container-1 {
            position: absolute;
            height: 500px;
            width: 100%;
        }

        .container-1 img {
            position: absolute;
            top: 5%;
            left: 27%;
            height: 100px;
            width: 130px;
        }

        .container-1 h2 {
            position: absolute;
            top: 27%;
        }

        .container-1 h5 {
            position: absolute;
            top: 33%;
        }

        .container-1 p {
            position: absolute;
            top: 35%;
        }

        .container-1 .add {
            position: absolute;
            top: 50%;
            left: 65%;
            height: 10%;
            width: 20%;
        }

        .container-1 .minus {
            position: absolute;
            top: 50%;
            left: 15%;
            height: 10%;
            width: 20%;
        }
    }

    footer {
        position: absolute;
        /* Change to relative */
        background-color: var(--black-color);
        color: white;
        bottom: -50em;
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
    @media (max-width: 600px) {
        footer {
            position: absolute;
            top: 2650px;
            height: 100%;
            width: 100%;
        }

        footer p {
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

    h4 {
        position: absolute;
        top: 20%;
        left: 10%;
        font-size: 20px;
        font-family: var(--body-font);
    }

    .container-2 {
        position: absolute;
        top: 25%;
        right: 10%;
        width: 25%;
        height: 200px;
        background-color: white;
        border-radius: 5px;
        padding: 10px 10px;
        filter: drop-shadow(3px 3px 3px #000);
    }

    .container-2 h5 {
        font-size: 20px;
        color: blue;
        font-family: var(--body-font);
    }

    .container-2 hr {
        margin: 10px;
    }

    .price h6 {
        font-size: large;
    }

    .cart-items .save_for_later {
        position: absolute;
        top: 60%;
        right: 25%;
        background: green;
        color: white;
        padding: 10px;
        border: 2px solid white;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <!--=============== HEADER ===============-->
    <?php include 'nav.php';?>
    <h4>My Cart: </h4>
    <div class="container-1 shadow">
        <?php
    $total = 0;
    
    // Check if an "id" is provided in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `products` WHERE id = '$id';";
        $res = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $p_name = $row['name'];
                $p_price = $row['price'];
                $p_rating = $row['rating'];
                $p_desc1 = $row['desc1'];
                $imageData1 = base64_encode($row['p1']);
                $imageTag1 = '<img src="data:image/png;base64,' . $imageData1 . '" alt="" id="mainImg" height="200" width="650" class="productImg img-fluid p-3 mb-5 rounded" style="position:relative;filter:drop-shadow(10px 3px 3px #CDCDCD)">';
                $row['img'] = $imageTag1;
                $products[] = $row;
                
                // Get the quantity from the session or set it to 1 if not set
                $qty = isset($_SESSION['quantity']) ? $_SESSION['quantity'] : 1;
                $price = $row['price'];
                
                // Handle the "Add" and "Minus" buttons
                if (isset($_POST['add'])) {
                    $qty++;
                } elseif (isset($_POST['minus']) && $qty > 1) {
                    $qty--;
                }
                
                // Store the updated quantity in the session
                $_SESSION['quantity'] = $qty;
                
                // Calculate price based on quantity
                $p1 = $price * $qty;
                $priceToDisplay = $qty > 1 ? $p1 : $price;
                
                // Display the product details and quantity controls
                $email = "";
                if ((isset($_SESSION['access_token']) && $_SESSION['user_email_address'])) {
                    if(isset($_SESSION['user_email_address'])){
                        $email = $_SESSION['user_email_address'];
                    }
                    echo "
                    <div class='cart-items'>
                        <form action='add_cart.php?id=" . $id . "' method='post'>
                            <div class='border rounded'>
                                <div class='row bg-white'>
                                    <div class='col-md-3'>
                                        " . $imageTag1 . "
                                    </div>
                                    <div class='col-md-6'>
                                        <h5 class='name'>Product Name: " . $p_name . "</h5><br>
                                        <h5 class 'price' style='position: absolute;top: 30%;'>Product Price: &#8377;" . $priceToDisplay . "</h5>
                                    </div>
                                    <div class='col-md-3 py-5'>
                                        <button type='submit' class='minus' name='minus'>-</button>
                                        <h3 style=''>" . $qty . "</h3>
                                        <button type='submit' name='add' class='add'>+</button>
                                    </div>
                                </div>
                            </div>
                            <a href='payment.php?id=" . $id . "' class='btn btn-warning' name='buynnow'>Buy Now</a>
                            <form action='add_cart.php' method='post'>
                                <button type='submit' name='save' class='save_for_later' value='" . $id . "'>Save For Later</button>
                            </form>
                            <a href='add_cart.php?remove=" . $id . "' class='btn btn-danger mx-2' name='remove'>Remove</a>
                            <input type='hidden' name='id' value='" . $id . "'>
                        </form>
                    </div>
                    ";
                    //$email = $row['email'];
                } else {
                    echo "<p>Your cart is empty. Login for add cart service</p>";
                }
            }
        } 
    } else {
        echo "not found";
    }
    if ((isset($_SESSION['access_token']) && $_SESSION['user_email_address'])) {

        function saveForLater($u_email, $p_id, $imageTag2, $name, $t_price, $p_qty) {
            global $conn;
            $sql = "INSERT INTO `cart`(`p_id`, `email`, `photo`, `name`, `price`, `qty`) VALUES ('$p_id', '$u_email', '$imageTag2', '$name', '$t_price', '$p_qty');";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo "<div class=''>
                    <script>alert('Your Cart is successfully saved......!');</script>;
                </div>";
            }
        }

        function RemoveProduct($p_id) {
            global $conn;
            $sql = "DELETE FROM `add_cart` WHERE `p_id` = '$p_id';";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo "<div class=''>
                    <script>alert('Your Cart is successfully removed......!');</script>;
                </div>";
            }
        }
        if (isset($_GET['remove'])) {
            $removeId = $_GET['remove'];
            RemoveProduct($removeId);
        }
        if (isset($_POST['save'])) {
            $saveId = $_POST['save'];
            saveForLater($email, $saveId, $imageTag1, $p_name, $p_price, $qty);
        }
        
    } else {
        echo "<p>Your cart is empty. Login for add cart service</p>";
    }
    ?>
    </div>
    <div class="container-2">
        <h5>Price Details:</h5>
        <hr>
        <div class="price">
            <?php
            $count = 0;
            if ((isset($_SESSION['access_token']) && $_SESSION['user_email_address'])) {
                    $count = mysqli_num_rows($res);
                    echo "<h6 style='padding:5px;'>Price ($count items)</h6>";
                }   
                else {
                    echo "<h6 style='padding:5px;'>Price (0 items)</h6>";
                }
        ?>
            <h6 style="padding:5px;">Delivery Charges</h6>
            <hr>
            <h6>Amount Payable</h6>
            <div class="price-2">
                <h6 style="color:red;position: absolute; top: 30%;right: 15%;"><?php echo $priceToDisplay ?></h6>
                <!-- Corrected the variable name to $total -->
                <h6 class="free" style="color:green;position: absolute; top: 48%;right: 15%;">FREE</h6>
                <h6 class="" style="color:red;position: absolute; top: 70%;right: 15%;"><?php echo $priceToDisplay ?>
                </h6> <!-- Corrected the variable name to $total -->
            </div>
        </div>
    </div>
    <?php
if ((isset($_SESSION['access_token']) && $_SESSION['user_email_address'])) {
    $sql = "SELECT * FROM `add_cart` WHERE `email` = '$email';";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)){
        while ($row = mysqli_fetch_assoc($res)) {
            $p_id = $row['p_id'];
            $p_name = $row['name'];
            $p_price = $row['price'];
            $p_qty = $row['qty'];
            $imageData2 = base64_encode($row['photo']);
            $imageTag2 = '<img src="data:image/png;base64,' . $imageData1 . '" alt="" id="mainImg" height="200" width="200" style="padding: 5px;margin-left:15%;"class="productImg img-fluid p-3 mb-5 rounded" style="position:relative;filter:drop-shadow(10px 3px 3px #CDCDCD)">';

            echo "
            <div class='container' style='position: relative;margin-top: 30%;margin-left: 5%;background: white;width: 300px;height: 320px;border-radius:5px;filter:drop-shadow(10px 5px 5px #CDCDCD)'>
                <div class='row'>
                    <div class='col-md-3 col-sm-6 my-3 my-md-2 equal-height-card'>
                        <div class='card shadow'>
                            <div>
                                ".$imageTag2."
                            </div>
                            <div class='card-body'>
                                <h5 class='card-title' style='position: relative;margin-left: 25%;'>
                                    ".$p_name."
                                </h5>
                                <h6>
                                    <i class='ri-star-fill' style='position: relative; left: 35%;'></i>
                                    <i class='ri-star-fill' style='position: relative; left: 35%;'></i>
                                    <i class='ri-star-fill' style='position: relative; left: 35%;'></i>
                                    <i class='ri-star-fill' style='position: relative; left: 35%;'></i>
                                    <i class='ri-star-line' style='position: relative; left: 35%;'></i>
                                </h6>
                                <p class='card-text' style='position: relative; margin-left: 35%;'>
                                    Quantity: ". $p_qty."
                                </p>
                                <h5 style='position: relative; margin-left: 40%;'>
                                    <span class='price'>&#8377;".$p_price."</span>
                                </h5>
                                <a href='payment.php?id=".$p_id."' class='btn btn-warning my-3'
                                    style='position: absolute;top: 85%;margin-left: 30%; background: yellow;border-radius: 5px;padding:5px;color:black;text-decoration:none;'>Buy Now <i class='ri-shopping-basket-line'></i></a>
                            </div>
                        </div>
                        <input type='hidden' name='product_name' value='". $p_name ."'>
                        <input type='hidden' name='product_price' value='" .$p_price."'>
                        <input type='hidden' name='product_image' value='". $p_qty."'>
                    </div>
                </div>
            </div>
            ";

    }
    }
}



    ?>
    <!--========== Footer ============-->
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