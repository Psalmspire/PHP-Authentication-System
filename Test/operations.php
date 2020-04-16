<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$department= $_POST['department'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];

$first_name == "" ? $errorArray = "First name cannot be blank" : "";

?>