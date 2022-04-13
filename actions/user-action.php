<?php
include '../classes/User.php';
$obj = new User;
// print_r($_POST);

$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$obj->store_user($fname,$lname,$contact,$username,$password,$email);

?>