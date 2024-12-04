<?php
$name="username";
$pass="password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_REQUEST['username']);
    if (empty($name)) {
        echo "Submit a name";
    } else {
        header('Location: http://165.227.98.100/classes.html');
    }
}
