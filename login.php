<?php
session_start();

$name="username";
$pass="password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_REQUEST['username']);
    if (($name = empty(1)) && ($pass = empty(1))) {
        header:('Location: http://165.227.98.100/index.html');
    }
    else {
        header('Location: http://165.227.98.100/classes.html');
    }
}


