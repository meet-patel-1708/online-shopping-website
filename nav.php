<?php
include 'config.php';
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#"class="nav__logo">
                    <img src="megamart.png" height="50" width="60"> Megamart
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>
            <form class="nav_search" action="search.php" method="get">
                <input type="search" style="position: absolute;left: 24%;color:black;" name="search" placeholder="Search The Product" id="">
                <button type="submit" style="position: absolute;left: 45%;color:black;">Search</button>
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
                        <a href="start_selling.php" class="dropdown__link">
                            <i class="ri-shopping-cart-2-fill"></i> Add To Cart
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
