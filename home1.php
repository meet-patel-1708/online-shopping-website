<?php
include('config.php');
include 'dbconnect.php';

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="shortcut icon" type="x-icon" href="megamart.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="style.css">

    <title>MegaMart</title>
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
            <form class="nav_search" action="search.php" method="get">
                <input type="search" style="position: absolute;left: 24%;color:black;" name="search" placeholder="Search The Product" id="">
                <button type="submit" style="position: absolute;left: 45%; color: black;">Search</button>
            </form>

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
                        <a href="add_cart.php" class="dropdown__link">
                            <?php 
                            $count = 0;
                            $sql = "SELECT * FROM `add_cart`;";
                            $res = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($res)){
                                if($row['email'] == isset($_SESSION['access_token']) && isset($_SESSION['user_email_address'])){
                                    $count = mysqli_num_rows($res);
                                }
                                else{
                                    $count = 0;
                                }
                            }

                            ?>
                            <i class="ri-shopping-cart-2-fill"></i> Add To Cart <h6 style="position:absolute;right: 20%;font-size: 20px;"><?php echo $count;?></h6>
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
    </header>


    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mt-5 pt-4">
            <div class="carousel-item active">
                <img src="1.jpeg" class="d-block w-100 h-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="2.jpeg" class="d-block w-100 h-70" alt="...">
            </div>
            <div class="carousel-item">
                <img src="3.jpeg" class="d-block w-100 h-70" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="brand">
        <h6 style='position:absolute;font-size: 35px;lefT:35%;margin:25px;padding:10px;color:white;background:black;'>Brands That Megamart Sell</h6><br/>
        <div class="brands-2" style="">
            <img src="apple.png" alt="">
            <img src="samsung.png" alt="">
            <img src="Sony-logo.png" alt="">
            <img src="hp.png" alt="">
            <img src="hitachi.png" alt="">
            <img src="oneplus.png" alt="">
            <img src="oppo.png" alt="">
            <img src="nike.png" alt="">
            <img src="voltas.png" alt="">
            <img src="titan.png" alt="">
            <img src="puma.png" alt="">
            <img src="sparx.png" alt="">
            <img src="dell.png" alt="">
            <img src="lenovo.png" alt="">
            <img src="asus.png" alt="">
            <img src="bluestar.png" alt="">
            <img src="adidas.png" alt="">
            <img src="redmi.png" alt="">

        </div>
    </div>
    <h2>
        <hr>-----TOP CATEGORIES TO CHOOSEN FROM-----
        <hr>
    </h2>
    <div class="box_register">
        <img src="megamart6.jpg" alt="MegaMart 6" class="register-img">
        <div class="register-content">
            <h3>Register as a Megamart Supplier</h3>
            <p>Sell your product to crores of customers at 0% commission</p>
            <h6><i class="ri-checkbox-circle-line"></i>Grow your business 10x | <i
                    class="ri-checkbox-circle-line"></i>Enjoy 100% Profit | <i class="ri-checkbox-circle-line"></i>Sell
                all over India</h6>
            <form action="becomeSeller.php">
                <button type="submit">REGISTER NOW</button>
            </form>
        </div>
    </div>
    
    <?php
$sql = "SELECT id,p1, name, price,rating FROM `products` LIMIT 16 ;";
$result = mysqli_query($conn, $sql);

$products = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Decode the image data from the BLOB column
        $imageData = base64_encode($row['p1']);

        // Create an HTML image tag to display the image
        $imageTag = '<img height="200" width="200" style="position:relative;margin-left:10%;margin-top:2%;"src="data:image/png;base64,' . $imageData . '" alt="">';

        // Add the image tag and other data to the products array
        $row['p1'] = $imageTag;
        $products[] = $row;
    }
}
?>

<div class="container" style="position: relative;margin-top: 1800px;">
    <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-md-3 col-sm-6 my-3 my-md-2 equal-height-card">
                    <div class="card shadow">
                        <div>
                            <?php echo $product['p1']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="position:relative;left: 10%;">
                                <?php echo $product['name']; ?>
                            </h5>
                            <h6>
                                <i class="ri-star-fill"style="position:relative;left: 30%;"></i>
                                <i class="ri-star-fill" style="position:relative;left: 30%;"></i>
                                <i class="ri-star-fill" style="position:relative;left: 30%;"></i>
                                <i class="ri-star-fill" style="position:relative;left: 30%;"></i>
                                <i class="ri-star-line"style="position:relative;left: 30%;"></i>
                            </h6>
                            <p class="card-text" style="position:relative;margin-left:30%;">
                                Rating: <?php echo $product['rating']; ?>
                            </p>
                            <h5 style="position:relative;margin-left:25%;">
                                <span class="price">&#8377;<?php echo $product['price']; ?></span>
                            </h5>
                            <a href="add_cart.php?id=<?php echo $product['id']; ?>" class="btn btn-warning my-3" style="position:relative;margin-left:20%;">Add to Cart <i class="ri-shopping-basket-line"></i></a>
                        </div>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $product['p1']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>


<div class="swiper mySwiper w-100 h-40 bg-light shadow p-3 mb-5 bg-white rounded">
        <div class="swiper-wrapper">
            <?php
        $sql = "SELECT p1, name, price FROM `products` LIMIT 10 OFFSET 10;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $imageData = base64_encode($row['p1']);

            // Create an HTML image tag to display the image
            $imageTag = '<img height="200" width="200" src="data:image/png;base64,' . $imageData . '" alt="">';

            // Add the image tag and other data to the products array
            $row['p1'] = $imageTag;
            $products[] = $row;

            echo "
                <div class='swiper-slide'>
                    " . $imageTag . "
                    <p style='  position: absolute; top: 100%;'>" . $row['name'] . "<br>&#8377;" . $row['price'] . "</p>
                </div>
            ";
        }
        ?>
        </div>
    </div>  



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>