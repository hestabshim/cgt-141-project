<?php
session_start();
$servername='127.0.0.1:3306';
$name='root';
$pass='b0518ae66817b1445350179bfb2660a2065daa34703d56c0';
$email= $_REQUEST["email"];
$password= $_REQUEST["password"];

ini_set('display_errors', 1);
$conn = new mysqli($servername, $name, $pass, 'logins');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO 'user_info' VALUES ('$email', '$password')";
if(mysqli_query($conn, $sql)){
    echo "<h3> Registration successful.";
}