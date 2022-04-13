<?php
include '../classes/User.php';
$obj = new User;

$user_id = $_GET['id'];

$obj->destroy_user($user_id);
?>