<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
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

    .container {
        position: absolute;
        top: 0;
        left: 0;
        width: 350px;
        height: 100%;
        color: white;
        background-color: #05157C;
    }

    .container img {
        position: relative;
        margin: 10px;
        top: 5%;
        left: 5%;
        width: 25%;
        height: 7%;
        border-radius: 50%;
        color: white;
        background-color: #05157C;
    }

    .container h3 {
        position: absolute;
        top: 5%;
        left: 35%;
    }

    .container a {
        position: absolute;
        top: 31%;
        lefT: 17%;
        color: black;
        padding: 5px;
        text-decoration: none;
        font-size: 25px;
        background-color: white;
        width: 70%;
        border-radius: 5px;
    }

    .container #credit {
        position: absolute;
        top: 20%;
        lefT: 17%;
        color: black;
        padding: 5px;
        text-decoration: none;
        font-size: 25px;
        background-color: white;
        width: 50%;
        border-radius: 5px;
    }

    .container #credit:hover {
        position: absolute;
        top: 20%;
        left: 10%;
        margin-top: 10px;
        padding: 5px;
        color: white;
        background: black;
        transition: .5s;
        border-radius: 5px;
        text-decoration: none;
        font-size: 25px;
    }

    .container a:hover {
        position: absolute;
        top: 20%;
        left: 10%;
        margin-top: 10px;
        padding: 5px;
        color: white;
        background: black;
        transition: .5s;
        border-radius: 5px;
        text-decoration: none;
        font-size: 25px;
    }

    .form-container {
        display: none;
        padding: 20px;
    }

    #CreditCardForm {
        position: relative;
        margin-top: 5%;
        margin-left: 20%;
        background-color: white;
        filter: drop-shadow(5px 5px 5px #cccccc);
        height: 500px;
        width: 1000px;
        border-radius: 5px;
    }

    #CreditCardForm form {
        position: relative;
        top: 20%;
        left: 5%;
    }

    #CreditCardForm form label {
        display: block;
        margin-top: 10px;
        /* You can adjust this value as needed for spacing */
    }

    #CreditCardForm form input {
        width: 50%;
    }

    #CreditCardForm .product-details {
        position: absolute;
        top: 0%;
        right: 0%;
        margin-right: -100px;
        margin-top: -65px;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        border: 2px solid black;
        filter: drop-shadow(5px 5px 5px #fff);
    }

    #CreditCardForm h6 {
        position: relative;
        top: 10%;
    }

    #CreditCardForm p {
        position: relative;
        margin-top: -12%;
        margin-left: 50%;
    }

    #CreditCardForm h4 {
        position: absolute;
        top: 10%;
        left: 7%;
        font-family: var(--body-font);
    }
    #CashOnDelivery {
        position: absolute;
        top: 15%;
        margin-left: 20%;
        background-color: white;
        filter: drop-shadow(5px 5px 5px #cccccc);
        height: 500px;
        width: 1000px;
        border-radius: 5px;
    }

    #CashOnDelivery form {
        position: relative;
        top: 30%;
        left: 10%;
    }

    #CashOnDelivery form label {
        display: block;
        margin-top: 10px;
        /* You can adjust this value as needed for spacing */
    }

    #CashOnDelivery form input {
        width: 50%;
    }

    #CashOnDelivery .product-details {
        position: absolute;
        top: 0%;
        right: 0%;
        margin-right: -100px;
        margin-top: -65px;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        border: 2px solid black;
        filter: drop-shadow(5px 5px 5px #fff);
    }

    .product-details input[name="qty"] {
        position: absolute;
        bottom: 3%;
        right: 25%;
        max-width: 50px;
    }

    #CashOnDelivery h4 {
        position: absolute;
        top: 10%;
        left: 12%;
        font-family: var(--body-font);
    }
    .container #bank{
        position:absolute ;
        top: 5%;
        left: 15%;
        font-size: 40px;
    }
    .container #cash{
        position:absolute ;
        top: 31%;
        left: 5%;
        font-size: 40px;
    }
    
    .container #card{
        position:absolute ;
        top: 20%;
        left: 5%;
        font-size: 40px;
    }
    </style>
</head>

<body>
<?php
include 'dbconnect.php';
    $insert = false;
    $cardNumber = $cardholder = $e_month = $cvv = $p_name1 = $p_price1 = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cardNumber'])) {
            $cardNumber = $_POST['cardNumber'];
            $card_hash = password_hash($cardNumber,PASSWORD_DEFAULT);
        }
        if (isset($_POST['cardHolder'])) {
            $cardholder = $_POST['cardHolder'];
        }
        if (isset($_POST['E_month'])) {
            $e_month = $_POST['E_month'];
        }
        if (isset($_POST['CVV'])) {
            $cvv = $_POST['CVV'];
            $cvv_hash = password_hash($cvv,PASSWORD_DEFAULT);
        }
        if (isset($_POST['p_name'])) {
            $p_name1 = $_POST['p_name'];
        }
        if (isset($_POST['p_price'])) {
            $p_price1 = $_POST['p_price'];
        }
        $sql = "INSERT INTO `card_payment` (`card_number`, `cardholder`, `e_month`, `cvv`, `p_name`, `p_price`) VALUES ('$card_hash', '$cardholder', '$e_month', '$cvv_hash', '$p_name1', '$p_price1');";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;
        }
    }
?>

    <?php   if ($insert) { ?>
    <div class="alert alert-success mt-3 w-50" style="position:absolute;left: 25%;top: 0%;">We are successfully receive payment
    </div>
    <?php } ?>
    <div class="container">
    <i class="ri-bank-fill" id="bank"></i><h3>Select Payment Method</h3>
    <i class="ri-bank-card-line" id="card"></i><a href="#" class="toggle-form" id="credit" data-target="CreditCardForm">Credit/Debit</a><br>
    <i class="ri-currency-line" id= "cash"></i><a href="#" class="toggle-form" class="cash" data-target="CashOnDelivery">Cash On
            &nbsp;Delivery</a>
    </div>
<?php
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
    $imageTag1 = '<img src="data:image/png;base64,' . $imageData1 . '" alt="" id="mainImg" height ="250" width="250" class="productImg img-fluid p-3 mb-5 rounded">';
} else {
    echo "not found";
}
?>
    <div class="form-container" id="CreditCardForm">
        <h4>Hi Meet,<br>You select <b>"Credit/Debit Card Option"</b> Option </h4>
        <!-- Higher Studies Fields -->
        <form method="post" action="payment.php" name="">
            <label for="">Card number:</label>
            <input type="text" class="form-control" name="cardNumber" placeholder="XXXX XXXX XXXX 1234">
            <label for="">Card Holder:</label>
            <input type="text" class="form-control" name="cardHolder" placeholder="Meet Patel">
            <label for="">Expiry Month:</label>
            <input type="month" class a="form-control" name="E_month" placeholder="">
            <label for="">CVV:</label>
            <input type="text" class="form-control" name="CVV" placeholder="">
            <div class="product-details">
                <?php echo $imageTag1; ?>
                <h6>Product Name:</h6>
                <input type="text" readonly style="position:absolute;left: 45%;top:60%;" name="p_name" value="<?php echo $p_name; ?>">
                <h6>Product Price:</h6>
                <input type="text" readonly style="position:absolute;left: 45%;top:70%;" name="p_price" value="<?php echo $p_price; ?>">
                <h6>Delivery Charges: </h6>
                <h6 style="position:absolute;left: 55%;top: 78%;color:green;">FREE</h6>
                <h6>Total Price:</h6>
                <p style="position:relative;left: -15%;margin-top:-7%;"><?php echo $p_price; ?></p>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>


<?php
$name = $address= $mobile_number = $p_name2 = $p_price2 ='';
 if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }
    if(isset($_POST['mobile_number'])){
        $mobile_number = $_POST['mobile_number'];
    }
    if (isset($_POST['p_name'])) {
        $p_name2 = $_POST['p_name'];
    }
    if (isset($_POST['p_price'])) {
        $p_price2 = $_POST['p_price'];
    }
    $sql1 = "INSERT INTO `cash_payment`(`name`,`address`,`mobile_number`,`p_name`,`p_price`) VALUES('$name','$address','$mobile_number','$p_name2','$p_price2');";
    $result = mysqli_query($conn, $sql1);
    if ($result) {
        $insert = true;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
}
?>
    <div class="form-container" id="CashOnDelivery">
        <h4>Hi Meet,<br>You select <b>"Cash On Delivery"</b> Option
        </h4>
        <!-- Job Fields -->
        <form method="post" action="payment.php">
            <label for="">You Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
            <label for="">Address:</label>
            <textarea type="text" class="form-control w-50" name="address" placeholder=""></textarea>
            <label for="">Mobile Number:</label>
            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
        <div class="product-details">
                <?php echo $imageTag1; ?>
                <h6>Product Name:</h6>
                <input type="text" readonly style="position:absolute;left: 45%;top:60%;" name="p_name" value="<?php echo $p_name; ?>">
                <h6>Product Price:</h6>
                <input type="text" readonly style="position:absolute;left: 45%;top:70%;" name="p_price" value="<?php echo $p_price; ?>">
                <h6>Delivery Charges: </h6>
                <h6 style="position:absolute;left: 55%;top: 78%;color:green;">FREE</h6>
                <h6>Total Price:</h6>
                <p style="position:absolute;left: 35%;top:90%;"><?php echo $p_price; ?></p>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script>
    const toggleFormLinks = document.querySelectorAll('.toggle-form');
    const formContainers = document.querySelectorAll('.form-container');

    toggleFormLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('data-target');

            formContainers.forEach(container => {
                container.style.display = 'none';
            });

            const targetForm = document.getElementById(targetId);
            targetForm.style.display = 'block';
        });
    });
    </script>
    <!-- main js -->
    <script src="main.js"></script>
</body>

</html>