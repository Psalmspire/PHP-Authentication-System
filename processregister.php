<?php session_start();

$errorCount = 0;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$department= $_POST['department'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
 
//To check if an input field is empty... if empty count error and return number of empty fields
$first_name = $_POST['first_name'] != ""? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != ""? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != ""? $_POST['email'] : $errorCount++;
$gender = $_POST['gender'] != ""? $_POST['gender'] : $errorCount++;
$designation = $_POST['designation'] != ""? $_POST['designation'] : $errorCount++;
$department = $_POST['department'] != ""? $_POST['department'] : $errorCount++;
$password = $_POST['password'] != ""? $_POST['password'] : $errorCount++;


$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['gender'] = $gender;
$_SESSION['designation'] = $designation;
$_SESSION['department'] = $first_name;


if($errorCount > 0){
    //redirect back and display error
    $session_error = "You have " . $errorCount . " error";

    if ($errorCount > 1){
        $session_error .= "s";
    }

    $session_error .= " in your registration submission";

    $_SESSION['error'] = $session_error;
    header("Location: register.php");
    die();
}
else{
//count all users and assign the next available number as ID
$allUsers = scandir("db/users/");
$countallUsers = count($allUsers);
$newuserId = ($countallUsers-1); 

//Creation of array Userdata to be stored in the database
$UserData =[
    'ID' => $newuserId, 
    'first_name'=> $first_name,
    'last_name'=> $last_name,
    'password'=> password_hash($password, PASSWORD_DEFAULT),
    'email'=> $email,
    'department'=> $department,
    'designation'=> $designation,
    'gender'=> $gender
  ];

for ($counter = 0; $countallUsers <= 10; $counter++) {

    $CurrentUser = $allUsers[$counter];

    if($CurrentUser == $email.".json"){

        $_SESSION['error'] = "Registration failed! User already exist. Please login";
        header("Location: register.php");   
        die(); //Error redirects back to page if email address already exist.
         
    }
    else{//Store in database using email as file name.
file_put_contents("db/users/".$email.".json", json_encode($UserData));
$_SESSION['message'] = "Registration successful! You can now login " . $first_name;
header("Location: login.php");   //redirect to login page
    }
}
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




?>