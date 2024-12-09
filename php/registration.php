<?php
session_start();
include("connection.php");
include("functions.php");
ini_set('display_errors', 1);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        
        //save to database
        $user_id = random_num(20);
        $query = "insert into user_info (user_id,email,password) values ('$user_id','$email','$password')";
        
        mysqli_query ($con, $query);
        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
mysqli_close($con);
?>