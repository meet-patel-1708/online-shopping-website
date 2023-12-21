<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <title>sh0py : <?php echo $_GET["search"] ?></title>

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

    .product-page {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 150px;
        height: 50vh;
    }

    h1 {
        position: absolute;
        top: 20%;
        lefT: 20%;
    }

    .product-page {
        position: relative;
        background: white;
        margin-top: 15%;
        width: 80%;
        padding: 10px;
        left: 10%;
        border-radius: 5px;
    }

    .product-image {
        position: relative;
        right: 5%;
        overflow: hidden;
        position: relative;
    }

    #product-img {
        width: 400px;
        transition: transform 0.5s ease;
    }

    .product-image:hover #product-img {
        transform: scale(1.2);
    }

    .product-details {
        max-width: 400px;
    }

    .view {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
    }

    .product-details h2 {
        position: absolute;
        top: 20%;
        lefT: 58%;
    }

    button:hover {
        background-color: #0056b3;
    }

    .container-2 h3 {
        position: absolute;
        top: 15%;
        lefT: 1%;
        background: white;
        height: 1600px;
        width: 200px;
        padding: 10px;
        text-align: center;
        font-size: larger;
        font-family: var(--body-font);
        filter: drop-shadow(2px 2px 5px #000);
        border-radius: 5px;
    }

    </style>
</head>

<body>
    <?php
        include 'dbconnect.php';
    ?>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="home.php" class="nav__logo">
                    shOpsy
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>
            <form class="nav_search" action="search.php" method="get">
                <input type="search" style="position: absolute;left: 24%;color:black;" name="search" placeholder="Search The Product" id="">
                <button type="submit" style="position: absolute;left: 45%; color: black;">Search</button>
            </form>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="add_cart.php" class="nav__link"><i class="ri-shopping-cart-fill"></i> CART</a></li>

                    <li><a href="category.php" class="nav__link"><i class="ri-apps-2-fill"></i> CATEGORY</a></li>
                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                        <i class="ri-user-line"></i>
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
                        <a href="signup.php" class="dropdown__link">
                            <i class="ri-user-line"></i> Signin
                        </a>
                    </li>
                    <?php } ?>

                    <li>
                        <a href="#" class="dropdown__link">
                            <i class="ri-lock-line"></i> Accounts
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <h1>Search Results for <em>"<?php echo $_GET["search"] ?>"</em></h1>
    <?php
        $products = [];
        $noresults = true;
        $query = $_GET["search"];
        $sql = "SELECT id,name,price,desc1,p1 FROM `products` where match(name,price) against('$query');";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $imageData = base64_encode($row['p1']);
            $noresults = false;
        
            // Create an HTML image tag to display the image
            $imageTag = '<img src="data:image/png;base64,' . $imageData . '" alt="" height="270" class="img-fluid  p-3 mb-5 rounded">';
            echo '

            <div class="product-page" style="height: 60%;">
                <div class="product-image">
                    '.$imageTag.'
                </div>
                <div class="product-details">
                    <h2 style="position: relative;margin-top: 10%; left: 50%;">'.$row['name'].'</h2>
                    <h6>
                                <i class="ri-star-fill"style="left: 30%;"></i>
                                <i class="ri-star-fill" style="left: 30%;"></i>
                                <i class="ri-star-fill" style="left: 30%;"></i>
                                <i class="ri-star-fill" style="left: 30%;"></i>
                                <i class="ri-star-line"style="left: 30%;"></i>
                            </h6>
                    <p style="position: relative; left: 0%;">'.$row['desc1'].'</p>
                    <p style="position: relative;margin-top: 5%; left: 0%;"><b>Price: '.$row['price'].'</b></p>
                    <a href="view.php?id='.$row['id'].'" class="view">view More</a>
                </div>
            </div>
        ';
    }
    if($noresults){
        echo'
            <div class="jumbotron jumbotron-fluid">
                <div class="container bg-black">
                    <p style="position:absolute;top: 30%;left: 30%;font-size: 20px;">NO RESULTS FOUND</p>
                    <p style="position:absolute;top: 35%;left: 30%;font-size: 20px;">Suggestions:
                    <ul>
                        <li style="position:absolute;top: 40%;left: 35%;font-size: 20px;">Make sure that all words are spelled correctly.</li>
                        <li style="position:absolute;top: 45%;left: 35%;font-size: 20px;">Try different keywords.</li>
                        <li style="position:absolute;top: 50%;left: 35%;font-size: 20px;">Try more general keywords.</li>
                    </ul>
                    </p>
                </div>
            </div>
        ';
    }
?>
</body>

</html>