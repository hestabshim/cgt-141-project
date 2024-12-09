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
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($user_id))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,email,password) values ('$user_id','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
