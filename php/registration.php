<?php
session_start();
include ("connection.php");
ini_set('display_errors', 1);

function random_num($length)
{

    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        # code...

        $text .= rand(0, 9);
    }

    return $text;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {

        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,email,password) values ('$user_id','$email','$password')";
        
        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
        mysqli_error($con);
    }
}
?>