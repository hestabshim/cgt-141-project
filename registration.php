<?php
session_start();
$servername='127.0.0.1:3306';
$name='root';
$pass='b0518ae66817b1445350179bfb2660a2065daa34703d56c0';
$username= $_POST["username"];
$password= $_POST["password"];

ini_set('display_errors', 1);
$conn = new mysqli($servername, $name, $pass, 'logins');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
$stmt = $conn->prepare("insert into user_info(username, password)
values(?,?)");
$stmt->bind_param("ss",$username, $password);
$stmt->execute();
echo "Registration Successful";
}