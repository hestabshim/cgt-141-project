<?php
session_start();
$servername = '127.0.0.1:3306';
$name = 'root';
$pass = 'b0518ae66817b1445350179bfb2660a2065daa34703d56c0';
$dbname='logins';

ini_set('display_errors', 1);
if (!$conn = mysqli_connect($servername, $name, $pass, $dbname));
{
    die("failed to connect!");
}

    