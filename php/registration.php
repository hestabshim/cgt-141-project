<?php
// define variables

session_start();
include("connection.php");
include("functions.php");


$email= $_REQUEST["email"];
$password= $_REQUEST["password"];
// displays errors
ini_set('display_errors', 1);

$conn = new mysqli($servername, $name, $pass, 'logins');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql= "INSERT INTO user_info VALUES ('$email', '$password')";
if(mysqli_query($conn, $sql)){
    echo "<h3> Registration successful.";
    echo "<a href='index.html'> Return to login page </a>";
}