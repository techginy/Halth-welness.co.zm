<?php

session_start();


$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "from:" .$name."<".$email.">\r\n";

$recipient = "info@healthandwellnesscentre.co.zm";

mail($recipient, $subject, $message, $mailheader)

or die("error");

echo'';








$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blacktube"

$con = mysqli_connect($servername, $username, $password, $dbname);

?>