<?php

//Collecting data from form

$first_name = $_POST['first_name']
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$department= $_POST['department'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];

//verification/data validation

$errorCount = 0;
$first_name = $_POST['first_name'] != ""? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != ""? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != ""? $_POST['email'] : $errorCount++;

if($errorCount > 0{
    //redirect back and display error
})
else{
    //continue to database
}

/*

$errorArray = [];
if($first_name == ""){
    $errorArray = "First name cannot be blank"; //print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

if($last_name == ""){
    $errorArray = "Last name cannot be blank";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

if($email == ""){
    $errorArray = "Valid email address must be provided";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

if($gender == ""){
    $errorArray = "You must select a gender";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}
if($department == ""){
    $errorArray = "Please select a department";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}
if($designation == ""){
    $errorArray = "Please select a role";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

*/

//saving data in db
//return to page with status message



?>