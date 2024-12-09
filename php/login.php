<?php

session_start();
include("connection.php");
include("functions.php");

ini_set('display_errors', value: 1);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)&&!is_numeric($email)) {

        //read from database
        $query = "select * from user_info where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: ../classes.html");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
        header("Location: ../index.html");
    }
}