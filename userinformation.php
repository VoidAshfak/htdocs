<?php

$connection = mysqli_connect('localhost:8012','root');
mysql_select_db($connection,"contact_data");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message')";

mysql_query($connection,$query);

echo "Message is sent.";

?>