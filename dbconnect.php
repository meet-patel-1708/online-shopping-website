<?php
$server = "localhost";
$username = "root";
$password = "";  //Enter your password here. Don't leave it blank!
$database = "ecommerce";
$conn = mysqli_connect($server,$username,$password,$database);
/*if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
else{
    echo "<h1>Connected to database successfully</h1>";
}*/
?>