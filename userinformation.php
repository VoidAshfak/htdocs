<?php
session_start();
//initializing variables
$user = "";
$pass = "";
//connect to database
$db = mysqli_connect('localhost:8012','root','','contact_info') or die("Couldn't connect to database");
$user = mysqli_real_escape_string($db,$_POST['user']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$message = mysqli_real_escape_string($db,$_POST['message']);

//save data

$query = "INSERT INTO userinfodata (user,email,message) VALUES ('$user','$email','$message')";
mysqli_query($db,$query);

echo "Done!";

?>