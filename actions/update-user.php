<?php

include '../classes/User.php';
$obj = new User;

$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$user_id = $_POST['user_id'];

$obj->update_user($user_id,$fname,$lname,$contact,$username,$password,$email); 
      
      
?>