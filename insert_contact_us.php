<?php
    include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = isset($_POST['email']) ? $_POST['email'] : ''; // Set to an empty string if not provided
    $contact_num = $_POST['contact_num'];

    $sql = "INSERT INTO `user_contact` (`name`, `email`, `contact_number`) VALUES ('$name', '$email', '$contact_num');";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <h5 style='position: absolute;top: 96%;left: 12%;font-size:15px;color:green;font-weight: 900;'>We are contact to you in 24 hours.</h5>";
    }
    else{
        echo "Error:".mysqli_error();
    }
    /*$twentyFourHours = date('Y-m-d H:i:s',strtotime('-24 hours'));
    $time= "SELECT time FROM user_contact;";
    $result1 = mysqli_query($conn,$time);
    if($result1 < $twentyFourHours){
        $sql1 = "DELETE FROM user_contact WHERE time< '$twentyFourHours'";
        echo "<h5 style='position: absolute;top: 96%;left: 12%;font-size:15px;color:green;font-weight: 900;'>Your data has been valid for 24 hours.<br>You have to enter credentials again to contact with us.</h5>";
    }*/
}
?>