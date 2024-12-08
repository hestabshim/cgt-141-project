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
$stmt = $conn->prepare("insert into logins(username, password)
values(?,?)");
$stmt->bind_param("ss",$username, $password);
$stmt->execute();
echo "Registration Successful";
}
echo "Connected successfully" . "<br>";

$sql = "SELECT * FROM user_info";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"]. " - password: " . $row["password"]. "<br>";
  }
  
} else {
  echo "0 results";
}
$conn->close();

?>