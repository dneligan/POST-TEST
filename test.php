<?php 
session_start();
$_SESSION['name'] = $_POST['name'];
$name = $_SESSION['name'];
$_SESSION['email'] = $_POST['email'];
$email = $_SESSION['email'];
echo $name, $email; 
?>