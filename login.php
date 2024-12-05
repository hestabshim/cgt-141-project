<?php
session_start();
$servername='localhost';
$name='root';
$pass='b0518ae66817b1445350179bfb2660a2065daa34703d56c0';
ini_set('display_errors', 1);
$conn = new mysqli($servername, $name, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {


//     $name = htmlspecialchars($_REQUEST['username']);
//     if (($name = empty(1)) && ($pass = empty(1))) {
//         header:('Location: http://165.227.98.100/index.html');
//     }
//     else {
//         header('Location: http://165.227.98.100/classes.html');
//     }
// }
?>


