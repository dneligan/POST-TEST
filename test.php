<?php 
session_start();
$_SESSION['name'] = $_POST['name'];
$name = $_SESSION['name'];
$_SESSION['email'] = $_POST['email'];
$name = $_SESSION['email'];
echo $name, $email; 
?>